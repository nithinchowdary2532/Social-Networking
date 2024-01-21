<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        /* CSS styles for the user profile page */
        /* Add your custom styles here */
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/user2.css">
    <script src="https://kit.fontawesome.com/162fc093ba.js" crossorigin="anonymous"></script>
    
    <script>
        function openPosts() {
            console.log("open");
            document.querySelector(".addPostsPage").style.display = "block";
        }
    
        function closePage() {
            document.querySelector(".addPostsPage").style.display = "none";
        }
    
      
    </script>
    
</head>
<body>
    <header>
        <!-- User profile header section -->
        <!-- Add your header content here -->
    </header>

    <main>
        <!-- User profile main content section -->
        <!-- Add your main content here -->
        
<?php
    include 'connection.php';
    
?>

        <div class="mainPage">
            <div class="userInformation">
                <div class="Info">
                    <h1>Intro</h1>
                    <div class = "bio">
                        <p>Hi, I'm Mai Sakurajima. I'm a third year high school student and a famous actress. I'm also a member of the school's science club. I'm currently dating Sakuta Azusagawa. </p>
                        <button class="bioEditButton"> Edit Bio </button>
                    </div>

                </div>
                    
                <div class="friendRequests">
                       
                    <div class="heading"> 
                        <div> <span> Friend Requests </span> </div>
                        <div> <span class="requests">See All Requests</span></div>
                        
                    </div>

                    <div class="requests">

                        <div class="friendRequest">
                            <div class="friendRequestImage">
                                <img src="../images/profilePicture.png" alt="profile picture" class="userImage">
                            </div>

                            <div class="friendRequestInfo">
                                <h2> Sakuta Azusagawa </h2>
                                <button class="acceptButton"> <i class="fa-solid fa-check"></i></button>
                                <button class="declineButton"> <i class="fa-solid fa-cancel"></i> </button>
                            </div>

                        </div>

                        <div class="friendRequest">
                            <div class="friendRequestImage">
                                <img src="../images/profilePicture.png" alt="profile picture" class="userImage">
                            </div>

                            <div class="friendRequestInfo">
                                <h2> Sakuta Azusagawa </h2>
                                <button class="acceptButton"> <i class="fa-solid fa-check"></i> </button>
                                <button class="declineButton"> <i class="fa-solid fa-cancel"></i> </button>
                            </div>

                        </div>


                        <div class="friendRequest">
                            <div class="friendRequestImage">
                                <img src="../images/profilePicture.png" alt="profile picture" class="userImage">
                            </div>
                            <div class="friendRequestInfo">
                                <h2> Sakuta Azusagawa </h2>
                                <button class="acceptButton"> <i class="fa-solid fa-check"></i> </button>
                                <button class="declineButton"> <i class="fa-solid fa-cancel"></i> </button>
                            </div>
                        </div>
                    </div>
                   </div>


                <div class="friends">
                        <div class="heading"> 
                            <div> <span> Friends </span> </div>
                            <div> <span class="requests">See All Friends</span></div>  
                        </div> 
                        
                        <div class="friendList">

                            <div class="friend">
                                <div class="friendImage">
                                    <img src="../images/profilePicture.png" alt="profile picture" class="userImage">
                                </div>
    
                                <div class="friendsInfo">
                                    <h2> Sakuta Azusagawa </h2>
                                </div>
    
                            </div>
    
                            <div class="friend">
                                <div class="friendImage">
                                    <img src="../images/profilePicture.png" alt="profile picture" class="userImage">
                                </div>
    
                                <div class="friendsInfo">
                                    <h2> Sakuta Azusagawa </h2>
                                </div>
    
                            </div>
    
    
                            <div class="friend">
                                <div class="friendImage">
                                    <img src="../images/profilePicture.png" alt="profile picture" class="userImage">
                                </div>
                                <div class="friendsInfo">
                                    <h2> Sakuta Azusagawa </h2>
                                </div>
                            </div>


                            <div class="friend">
                                <div class="friendImage">
                                    <img src="../images/profilePicture.png" alt="profile picture" class="userImage">
                                </div>
    
                                <div class="friendsInfo">
                                    <h2> Sakuta Azusagawa </h2>
                                </div>
    
                            </div>
    
                            <div class="friend">
                                <div class="friendImage">
                                    <img src="../images/profilePicture.png" alt="profile picture" class="userImage">
                                </div>
    
                                <div class="friendsInfo">
                                    <h2> Sakuta Azusagawa </h2>

                                </div>
    
                            </div>
    
    
                            <div class="friend">
                                <div class="friendImage">
                                    <img src="../images/profilePicture.png" alt="profile picture" class="userImage">
                                </div>
                                <div class="friendsInfo">
                                    <h2> Sakuta Azusagawa </h2>

                                </div>
                            </div>



                            <div class="friend">
                                <div class="friendImage">
                                    <img src="../images/profilePicture.png" alt="profile picture" class="userImage">
                                </div>
    
                                <div class="friendsInfo">
                                    <h2> Sakuta Azusagawa </h2>
                                </div>
    
                            </div>
    
                            <div class="friend">
                                <div class="friendImage">
                                    <img src="../images/profilePicture.png" alt="profile picture" class="userImage">
                                </div>
    
                                <div class="friendsInfo">
                                    <h2> Sakuta Azusagawa </h2>

                                </div>
    
                            </div>
    
    
                            <div class="friend">
                                <div class="friendImage">
                                    <img src="../images/profilePicture.png" alt="profile picture" class="userImage">
                                </div>
                                <div class="friendsInfo">
                                    <h2> Sakuta Azusagawa </h2>
                                </div>
                            </div>
                        </div>
                </div>

                <div>

                </div>

        </div>

   
      


            <div class="usersPosts">

                <div class="addPosts">
                    <div class="addPost">
                        <div class="profileIconDiv">
                            <img src="" alt="" class="profileIcon">
                        </div>
                        
                        <div class="PostsAdd">
                            <div class="postText">
                                <textarea name="post" id="post" cols="30" rows="1" placeholder="What's on your mind?"></textarea>
                            </div>
                            <div class="Buttons">
                                <div>
                                    
                                    <button onclick=openPosts()> <i class="fa-solid fa-image" ></i> Photo</button>
        
                                </div>
                                
                                <div>
                                    <button onclick=openPosts()> <i class="fa-solid fa-video" ></i> Video</button>
                                </div>
                            </div>

                        </div>
                        
                    </div>

          
                </div>

                <div class="usersPosts">

                <?php
$sql = "SELECT * FROM posts ORDER BY post_date ASC";
$result = $conn->query($sql);

$posts = array();

while ($row = $result->fetch_assoc()) {
    $posts[] = $row;
}

for ($i = count($posts) - 1; $i >= 0; $i--) {
    $row = $posts[$i];
?>
    <div class="post">
        <div class="userDetails">
            <div class="userImageDiv">
                <img src="../images/profilePicture.png" alt="profile picture" class="userImageImg">
            </div>
            <div>
                <div class="userName">
                    <h2>Sakuta Azusagawa</h2>
                </div>
                <div class="date">
                <?php
                    $postDate = new DateTime($row['post_date']);
                    echo $postDate->format('d-m-Y'); 
                    ?>
                </div>
            </div>
        </div>

        <div class="Post">
            <?php
            if (!empty($row['post_image_path'])) {
            ?>
                <div class="postImage">
                    <img src="<?php echo $row['post_image_path']; ?>" alt="Post Image">
                </div>
            <?php
            }
            ?>

            <?php if (!empty($row['post_content'])) { ?>
                <p><?php echo $row['post_content']; ?></p>
            <?php } ?>
        </div>
        <div class="likeComments">
    <div class="like">
        <button> <i class="fa-solid fa-heart"></i> </button>
    </div>
    <div class="comments">
        <button> <i class="fa-solid fa-comment"></i> </button>
    </div>
    <div class="share">
        <button> <i class="fa-solid fa-share"></i> </button>
    </div>
</div>
    </div>
<?php
}
?>




        </div>

 
        <div class="addPostsPage">
            <div class="close">
                <i class="fas fa-times" onclick="closePage()"></i>
            </div>
            
        <form action="post.php" method="post" enctype="multipart/form-data">
            <div class="addPostsHeading">
                <h1> Add Post </h1>
            </div>
        
            <div id="postForm">
                <textarea name="postText" id="postText" placeholder="What's on your mind?"></textarea>
              

                <img id="imagePreview" alt="Image Preview" />
                <input type="file" name="mediaButton" id="mediaButton" accept="image/*" />

                <button class="submitPost" type="submit">Post</button>
            </div>
        </form>
        </div>

    </main>

    

    <footer>
        <!-- User profile footer section -->
        <!-- Add your footer content here -->
    </footer>
    <script>
        document.getElementById('mediaButton').addEventListener('change', previewImage);
    
        function previewImage() {
            const imageInput = document.getElementById('mediaButton');
            const imagePreview = document.getElementById('imagePreview');
    
            if (imageInput.files && imageInput.files[0]) {
                const reader = new FileReader();
    
                reader.onload = function (e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                };
    
                reader.readAsDataURL(imageInput.files[0]);
            }
        }
    </script>
    
    
</body>
</html>
