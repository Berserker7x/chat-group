<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="salam.css">

  

<!DOCTYPE html>
<html>
	<head>
		<title>Chat</title>
		<script defer src="http://localhost:3000/socket.io/socket.io.js"></script>
          <script defer src="script.js"></script>
         
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
	   
  	</head>

	<body>
		<div class="container-fluid h-100">
			<div class="row justify-content-center h-100">
				<div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						<div class="input-group">
							 
							<div class="input-group-prepend">
							 
							</div>
						</div>
					</div>
					<div class="card-body contacts_body">
						<ui class="contacts">
						<li class="active">
							<div class="d-flex bd-highlight">
								
							<p style= "font-family:  Arial Black, Gadget, sans-serif ;
                                      font-size: 14px;
                                      color:orange;
                                       font-weight: bold;
                                       text-transform: uppercase;
                                         text-decoration: underline;"
                                  >SALUT   <?php echo $_GET['q']; ?></p>
                         

								<div class="img_cont">
									 
							</div>
						</li>
						<li> 
							 
							<div class="d-flex bd-highlight">
								
									 
							</div>
						</li>
						<li>
							
						</li>
						<li>
							<div class="d-flex bd-highlight">
								
							 
						</li>
						<li>
							<div class="d-flex bd-highlight">
								 
						</li>
						</ui>
					</div>
					<div class="card-footer"></div>
				</div></div>
				<div class="col-md-8 col-xl-6 chat">
					<div class="card">
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="img/UI.jpg" class="rounded-circle user_img">
									
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span>Chat with ENSIAST</span>
									<p></p>
								</div>
								<div class="video_cam">
									<span><img src="img/about us.png" alt="about us" ></span>
									<a href="http://ensias.um5.ac.ma/">
									<span><img src="img/ensias" width="50" height="50"> </span>
									
                                     </a>
									 <a href="http://localhost/ensibot/"><img src="https://img.icons8.com/color/48/4a90e2/power-off-button.png"></a>
									     
                                 
									 
								</div>
							</div>
							<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
							<div class="action_menu">
								<ul>
									<li><i class="fas fa-user-circle"></i> View profile</li>
									<li><i class="fas fa-users"></i> Add to close friends</li>
									<li><i class="fas fa-plus"></i> Add to group</li>
									<li><i class="fas fa-ban"></i> Block</li>
								</ul>
							</div>
						</div>
						<div class="card-body msg_card_body">
						<ul class="message-list">
        
                            <li class="message-item item-primary" style ="list-style-type: none;">
                              EnsiBot : Salut etudiant veuillez poser vos question 
                                 </li>
                                 </ul>
						
								
							</div>
						
						 
							 
		
							
								
								 
							
							
						
					   
						<div class="card-footer">
							<div class="input-group">
								<div class="input-group-append">
									<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
								</div>
								<input name="" id="form-control type_msg" placeholder="Type your message...">
								<div class="input-group-append">
									<button id="input-group-text send_btn"><i class="fas fa-location-arrow"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
 
	</body>
</html>
