<!DOCTYPE html>
<html>
	<head>
		<title>Chat</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
		 <link rel="stylesheet" type="text/css" href=" https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css">
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

	</head>
	<!--Coded With Love By Mutiullah Samim-->
	<body>

		<div class="container-fluid h-100">
			<div class="row justify-content-center h-100">
				<div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						
						<div class="input-group">
							<input type="text" placeholder="Search..." name="search" id="searchUser" class="form-control search">
							<div class="input-group-prepend">
								<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
							</div>
						</div>
					</div>
					<div class="card-body contacts_body">
						<ui class="contacts">
                         <input type="hidden" value="" id="senderImg">
						<li class="active" id="self_info">
                            <div class="d-flex bd-highlight mb-2" id="user_dialog" style="position:relative;">
                                <div class="img_cont">
                                            <img src="img/user1.png" class="rounded-circle user_img">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Erick Irwansyah</span>
                                            <p>online<br>
                                                
                                            </p>											
                                        </div>
                                    </div>
						</li>
						<li id="kontak">
							
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
									<img src="img/group.png" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="group_info">
									<span>Group Chat</span>
									<p><b>150</b> Messages</p> 
								</div>
								<div class="video_cam">
									<span><i class="fas fa-video"></i></span>
									<span><i class="fas fa-phone"></i></span>
								</div>
							</div>
							<span id="action_menu_btn"><i class="fas fa-ellipsis-v" data-target=""></i></span>

							<div class="action_menu">
								<ul>
								<li id="history" data-toggle="modal" data-target="#exampleModal3"><i class="fas fa-user-circle"></i> History Cipher</li>
									<li class="about" data-toggle="modal" data-target="#exampleModal4"><i class="fas fa-users"></i> About Author</li>
									<li><i class="fas fa-ban"></i> <a onclick="return confirm('Are you sure want to exit?')" href="logout.php" style="text-decoration: none; color: #fff;">Logout</a></li>
								</ul>
							</div>
						</div>
						<div class="card-body msg_card_body">
                           	<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet nihil unde excepturi dolores maiores reiciendis error cumque quibusdam quod expedita velit at veritatis, exercitationem vero facere nulla illum sapiente labore.
									<span class="msg_time_send mt-2">8:55 AM, Today</span>
								</div>
								<div class="img_cont_msg">
							<img src="img/user1.png" class="rounded-circle user_img_msg">
								</div>
							</div> 
                            
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="img/user1.png" class="rounded-circle user_img_msg">
                                    </div>
								<div class="msg_container_">
									Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam autem animi deleniti quo obcaecati dolorem non, omnis consequuntur facere sequi eos officia dolor, qui aliquam? Vero fugiat totam repellendus velit.
									<span class="msg_time_send mt-2">8:55 AM, Today</span>
								</div>
								
							</div> 

                        
						</div>
						<div class="card-footer">
							<div class="input-group">
								<div class="input-group-append" >
									<span><input type="number" name="key" id="key" class="form-control mr-1" style="width: 70px; height: 70px;" min="1" max="26">
									</span>
								</div>
								<textarea name="pesan" data-userid="" data-username="" placeholder="Type your message..."class="form-control"></textarea>
								<div class="input-group-append">
									<span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div></div>
				<div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 cipher_card">
					<div class="card-header">
							<span><i class="fas fa-cogs" id="setting" style="color: #fff;text-align: center;"></i></span>
					</div>
					<div class="card-body contacts_body">
						<ui class="contacts">
						<li class="active">
							<div class="d-flex bd-highlight">
								<textarea class="form-control cipertext" name="cipertext" id="plaintext" cols="30" rows="10"></textarea>
							</div>
							<input name="key" id="decriptkey" type="number" min="1" max="255" class="form-control mt-2 cipertext">
						</li>	
						<button class="btn btn-primary btn-block"  id="decrypt"><i class="fas fa-papper-plane">Dekripsi</i></button>	
						<!-- data-toggle="modal" data-target="#exampleModal8" -->
					</ui>
		</div>
	</div>
	
</div>
</div>
</div>
 
	</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script>
	$('#action_menu_btn').click(function(){
		$('.action_menu').toggle();
	});

	$(document).ready(function() {					
         	function getTimeInfo(){
           		var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                  var time = new Date(),
                      day = time.getDay(),
                      day = myDays[day];
                      date = day + ', '+time.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true })
               return date;
           	}   

    })

	</script>