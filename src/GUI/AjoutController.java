/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.User;


import Services.UserService;
import db.SendEmail;

import java.awt.image.BufferedImage;
import java.io.ByteArrayOutputStream;
import java.io.File;
import java.io.FileInputStream;
import java.io.IOException;
import java.net.URL;
import java.security.NoSuchAlgorithmException;
import java.sql.SQLDataException;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.embed.swing.SwingFXUtils;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.image.ImageView;
import javafx.scene.image.WritableImage;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javafx.util.Duration;
import javax.imageio.ImageIO;
import javax.mail.MessagingException;
import tray.animations.AnimationType;
import tray.notification.NotificationType;
import tray.notification.TrayNotification;

/**
 * FXML Controller class
 *
 * @author Takwa
 */
public class AjoutController implements Initializable {

    @FXML
    private Label welcome;
    @FXML
    private TextField email;
    @FXML
    private TextField Nom;
    private TextField tel;
    @FXML
    private TextField mdp;
    @FXML
    private ComboBox<String> usertype;
    @FXML
    private Button A;
    @FXML
    private Hyperlink prec;
    private TextField cin;
    private TextField Prenom;
    private ComboBox<String> Sexe;
    @FXML
    private ImageView imgajoutincours;
    @FXML
    private Label imgpathttt;
    @FXML
    private Button Timage;
   

    /**
     * Initializes the controller class.
     * @param url
     * @param rb
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        ObservableList<String> list_ne = FXCollections.observableArrayList( "Admin", "Client");
        usertype.setItems(list_ne);
       
       // User.setText(LoginController.connectedUser.getNom());
        
    }    
  
  
@FXML
    private void addimgcours(ActionEvent event) {
        FileChooser fileChooser = new FileChooser();
        FileChooser.ExtensionFilter extFilterJPG
                = new FileChooser.ExtensionFilter("JPG files (*.JPG)", "*.JPG");
        FileChooser.ExtensionFilter extFilterjpg
                = new FileChooser.ExtensionFilter("jpg files (*.jpg)", "*.jpg");
        FileChooser.ExtensionFilter extFilterPNG
                = new FileChooser.ExtensionFilter("PNG files (*.PNG)", "*.PNG");
        FileChooser.ExtensionFilter extFilterpng
                = new FileChooser.ExtensionFilter("png files (*.png)", "*.png");
        fileChooser.getExtensionFilters()
                .addAll(extFilterJPG, extFilterjpg, extFilterPNG, extFilterpng);
        File file = fileChooser.showOpenDialog(null);
        try {
            BufferedImage bufferedImage = ImageIO.read(file);
            WritableImage image = SwingFXUtils.toFXImage(bufferedImage, null);
            imgajoutincours.setImage(image);
            imgajoutincours.setFitWidth(200);
            imgajoutincours.setFitHeight(200);
            imgajoutincours.scaleXProperty();
            imgajoutincours.scaleYProperty();
            imgajoutincours.setSmooth(true);
            imgajoutincours.setCache(true);
            FileInputStream fin = new FileInputStream(file);
            ByteArrayOutputStream bos = new ByteArrayOutputStream();
            byte[] buf = new byte[1024];
            for (int readNum; (readNum = fin.read(buf)) != -1;) {
                bos.write(buf, 0, readNum);
            }
            byte[] person_image = bos.toByteArray();
        } catch (IOException ex) {
            Logger.getLogger("ss");
        }
        imgpathttt.setText(file.getAbsolutePath());
    }
    
    
    
    @FXML
    private void insert(ActionEvent event) throws SQLException, IOException, NoSuchAlgorithmException, MessagingException {
        
   if (email.getText().equals("")
                || mdp.getText().equals("")
                || Nom.getText().equals("")) {
            Alert a = new Alert(Alert.AlertType.WARNING);
            a.setContentText("Please fill all fields ");
            a.setHeaderText(null);
            a.showAndWait();
            
            
            
            
        }  
               
               
              else if (mdp.getText().matches("[\\\\!\"#$%&()*+,./:;<=>?@\\[\\]^_{|}~]+")
                ) {
            Alert a = new Alert(Alert.AlertType.WARNING);
            a.setContentText("  ne doit pas contenir un symbole ");
            a.setHeaderText(null);
            a.showAndWait();
          
        }     
              else {
                  
              
         UserService productService = new UserService();
         
//String login, String roles, String mdp, String nom, String image)
                User c = new User(email.getText(),usertype.getValue(),mdp.getText(),Nom.getText()
                        ,Timage.getText());
                    
        
        productService.ajouterUser(c);
       
        
          TrayNotification tray = new TrayNotification();
            AnimationType type = AnimationType.SLIDE;
            tray.setAnimationType(type);
            tray.setTitle("User Ajouté avec succées");
            tray.setMessage("User Ajouté avec succées");
            tray.setNotificationType(NotificationType.INFORMATION);//
            tray.showAndDismiss(Duration.millis(3000));
            SendEmail email = new SendEmail();

            email.mail("souhailamri90@gmail.com");
       
      
      
              Parent page1 = FXMLLoader.load(getClass().getResource("Login.fxml"));
        Scene scene = new Scene(page1, 1236, 785);
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        stage.setTitle("Liste des Utilisateurs");
        stage.setScene(scene);
        stage.show();  
        }
      
     
        
        
    }

    @FXML
    private void prec(ActionEvent event) throws IOException {
        
        
        Parent page1 = FXMLLoader.load(getClass().getResource("list.fxml"));
        Scene scene = new Scene(page1, 1236, 785);
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        stage.setTitle("Liste des Utilisateurs");
        stage.setScene(scene);
        stage.show();    
        
    }

    
}
