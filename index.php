<?php
  include('conn.php');
//   if(isset($_SESSION['UID'])) {

?>
<!DOCTYPE html>
<html class="ui-mobile">
    <head>

        <!-- Include meta tag to ensure proper rendering and touch zooming -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Include jQuery Mobile stylesheets -->
        <!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> -->
        <link rel="stylesheet" href="./css/jquery.mobile-1.4.5.css">
        <!-- Include the jQuery library -->
        <!-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> -->
        <script src="./js/jquery-1.11.1.min.js"></script>
        <!-- Include the jQuery Mobile library -->
        <!-- <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->
        <script src="./js/jquery.mobile-1.4.5.min.js"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="./js/jquery.min.js"></script>
    
        <style>
            /* .header {
                background-color: rgb(3, 71, 43);
            } */
            h1 {
                color: aliceblue;
                font-family: Arial, Helvetica, sans-serif;
            }
            #titleHead {
                text-align: left;
                margin: 5%;
                margin-left: 10%;
            }
            #userdis {
                text-align: left;
                margin: 5px;
                margin-top: 5%;
            }
            #other-color {
                background: rgb(151, 21, 60);
                color: aliceblue;
                border: 2px solid transparent;
            }
            #other-color:after {    
                background: none repeat scroll 0 0 transparent;
                bottom: 0;
                content: "";
                display: block;
                height: 2px;
                left: 50%;
                position: absolute;
                background: #fff;
                transition: width 0.3s ease 0s, left 0.3s ease 0s;
                width: 0;
            }
            #other-color:hover::after { 
                width: 100%; 
                left: 0; 
            }
           
            /* .x3 {
                left: 30px;
                top: 60px;
                transform: scale(3);
            }

            .x2 {
                left: 15px;
                top: 15px;
                transform: scale(2);
            }

            .click-element {
                background: rgba(255, 255, 255, 0);
                display: block;
                border-radius: 50%;
                height: 3px;
                position: absolute;
                width: 3px;
            }
            .dots-wrapper:active .click-element {
                animation: clicked 0.3s ease;
            }

            .dots-wrapper {
                border-radius: 2.5px;
                cursor: pointer;
                height: 30px;
                overflow: hidden;
                position: relative;
                transition: all 0.5s ease-in;
                width: 30px;
                float: right;
                margin-top: 5px;
                margin-right: 5px;
            }
            /* .dots-wrapper:hover {
                background: #e1e1e1;
                transition: all 0.1s ease-in;
            } */

            /* .dots {
                background-color: rgb(255, 255, 255);
                border-radius: 50%;
                height: 3px;
                left: 50%;
                position: absolute;
                top: 50%;
                transform: translateX(-1.5px) translateY(-1.5px);
                width: 3px;
            }
            .dots:before, .dots:after {
                background-color: inherit;
                border-radius: inherit;
                content: "";
                height: 100%;
                left: 0px;
                position: absolute;
                width: 100%;
            }
            .dots:before {
                top: -6px;
            }  */
            /* .dots:after {
                top: 6px;
            }  */
            /* #pop {
                margin-top: 5px;
            }
            .button {
                background-image: url('ic_action_more_vert2.png');
            } */
            .dropdown-content {
                text-align: right;
                width: 110px;
                height: fit-content;
                /* padding: 5px; */
                padding-right: 10px;
                opacity: 1;
                /* background-color: rgb(219, 175, 175); */

            }
            #popupMenu, #popupMenu2, #popupMenu3 {
                opacity: 1;
                background-color: rgb(219, 175, 175);
                border: solid white;
            }
            .dropdown-content p a {
                color:rgb(49, 9, 21);
            }
            .dropdown-content p {
                background-color:rgb(219, 175, 175);
                list-style:none;
                opacity:.8;
            }
            #chat_data {
                size : 5px;
            }
            #form_chat li a {
                padding:10px;
            }

        </style>
    </head>
    
    <body>
        <div data-role="page" data-theme="a" id="page1" >
            <!-- <div data-role="panel" id="myPanel" class="panel1">
                <h2>Panel Header..</h2>
                <p>Some text in the panel..</p>
            </div> -->
            <div data-role="popup" id="popupMenu" data-theme="a">
                <div id="myDropdown" class="dropdown-content">
                <p>
                    <a href="#home">Home</a>
                </p>
                <p>
                    <a href="#about">About</a>
                </p>
                <p>
                    <a href="#contact">Contact</a>
                </p>
                </div>  
            </div>
           
            <div class="header" data-role="header" style="background-color: rgb(151, 21, 60)">
                <!-- <a href="#myPanel" class="ui-btn ui-icon-bars ui-btn-icon-notext">Open Panel</a> -->
                
                <!-- <div class="dots-wrapper">
                    <div class="dots">
                        <div class="click-element"></div>
                    </div>
                </div> -->
                <a href="#popupMenu" data-rel="popup" data-transition="" id='pop' class="ui-btn ui-btn-right ui-icon-bars ui-btn-icon-notext"></a>
                
                <h1 id="titleHead">My App</h1>
                

                
                
                    <div class="nav " data-role="navbar" class="custom-navbar">
                        <ul>
                            <li>
                                <a href="#page1" id="other-color" data-transition="none" data-direction="reverse">CHATS</a>
                                
                            </li>
                            <li>
                                <a href="#page2" id="other-color" data-transition="none" data-direction="reverse">STATUS</a>
                            </li>
                            <li>
                                <a href="#page3" id="other-color" data-transition="none" data-direction="reverse">CALLS</a>
                            </li>
                        </ul>
                    </div>
                
            </div>
    
            <div data-role="main" class="ui-content">
                <p>This is Chat Page</p>
                <form class="ui-filterable">
                    <input id="myFilter" data-type="search">
                </form>

                <ul data-role="listview" data-autodividers="true" data-inset="true" placeholder="Search for contacts" data-filter="true" data-input="#myFilter">
                    <!-- <li>
                        <a href="./chats.php" id='adele'>Adele</a>
                    </li>
                    <li>
                        <a href="#chat_container">Agnes</a>
                    </li>
                    <li>
                        <a href="#chat_main">Albert</a>
                    </li> -->
                    <?php
                        $sel = "SELECT * FROM users";
                        $res = $con->query($sel);
                        while($row = $res->fetch_assoc())
                        {

                    ?>
                    <tr>
                        <td>
                            <!-- <form action="#chat_container" method="post"> -->
                            <form id='form_chat'>
                                <input type="hidden" id='user_id' value=<?php echo $row['userid'] ?> name="id" >
                                <!-- <input type='submit' name="sub" value=> -->
                                <p><a href="#chat_container" data-role='button' id='user_name'><?php echo $row['name'] ?></a></p>
                                    
                            </form>
                        </td>    
                    </tr>
                    <?php
                        }
                    ?>
                </ul>
            </div>

        </div>
        <div data-role="page" data-theme="a" id="page2" >
            <!-- <div data-role="panel" id="myPanel">
                <h2>Panel Header..</h2>
                <p>Some text in the panel..</p>
            </div> -->
            <div data-role="popup" id="popupMenu2" data-theme="a">
                <div id="myDropdown" class="dropdown-content">
                    <p>
                        <a href="#home" >Home</a>
                    </p>
                    <p>
                        <a href="#about" >About</a>
                    </p>
                    <p>
                        <a href="#contact">Contact</a>
                    </p>
                </div>
            </div>
            <div class="header" data-role="header" style="background-color: rgb(151, 21, 60)">
                <!-- <a href="#myPanel" class="ui-btn ui-icon-bars ui-btn-icon-notext">Open Panel</a> -->
                
                <!-- <div class="dots-wrapper">
                    <div class="dots">
                        <div class="click-element">
                            
                        </div>
                    </div>
                </div> -->
                <a href="#popupMenu2" data-rel="popup" id='pop' data-transition="" class="ui-btn ui-btn-right ui-icon-bars ui-btn-icon-notext"></a>
                <h1 id="titleHead">My App</h1>
                <div class="nav" data-role="navbar" class="custom-navbar">
                    <ul>
                        <li>
                            <a href="#page1" id="other-color" data-transition="none" data-direction="reverse">CHATS</a>
                        </li>
                        <li>
                            <a href="#page2" id="other-color" data-transition="none" data-direction="reverse">STATUS</a>
                        </li>
                        <li>
                            <a href="#page3" id="other-color" data-transition="none" data-direction="reverse">CALLS</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div data-role="main" class="ui-content">
                <p>This is status Page</p>
                
            </div>
            
        
        </div>
        <div data-role="page" data-theme="a" id="page3" >
            <!-- <div data-role="panel" id="myPanel">
                <h2>Panel Header..</h2>
                <p>Some text in the panel..</p>
            </div> -->
            <div data-role="popup" id="popupMenu3" data-theme="a">
                <div id="myDropdown" class="dropdown-content">
                    <p>
                        <a href="#home">Home</a>
                    </p>
                    <p>
                        <a href="#about">About</a>
                    </p>
                    <p>
                        <a href="#contact">Contact</a>
                    </p>
                </div>
            </div>
            <div class="header" data-role="header" style="background-color: rgb(151, 21, 60)">
                <!-- <a href="#myPanel" class="ui-btn ui-icon-bars ui-btn-icon-notext">Open Panel</a> -->
                
                <!-- <div class="dots-wrapper">
                    <div class="dots">
                        <div class="click-element">
                            
                        </div>
                    </div>
                </div> -->
                <a href="#popupMenu3" data-rel="popup" id='pop' data-transition="" class="ui-btn ui-btn-right ui-icon-bars ui-btn-icon-notext"></a>
                <h1 id="titleHead" allign>My App</h1>
                <div class="nav" data-role="navbar" class="custom-navbar">
                    <ul>
                        <li>
                            <a href="#page1" id="other-color" data-transition="none" data-direction="reverse">CHATS</a>
                        </li>
                        <li>
                            <a href="#page2" id="other-color" data-transition="none" data-direction="reverse">STATUS</a>
                        </li>
                        <li>
                            <a href="#page3" id="other-color" data-transition="none" data-direction="reverse">CALLS</a>
                        </li>
                    </ul>
                </div>
            </div>
        
            <div data-role="main" class="ui-content">
                <p>This is calls page</p>
                
            </div>

        
        </div>
        <div data-role="page" data-theme="a" id="chat_container" >
            <div class="header" data-role="header" style="background-color: rgb(151, 21, 60)">
                <h1 id='userdis'>Username here</h1>
            </div>
            <div data-role="main" class="ui-content">
                <!-- <li><h1 id='data'></h1><li> -->
                <div id="data"></div>
            </div>
            <div class="footer" data-role="footer" style="background-color: rgb(151, 21, 60)">
                <form id='my_form'>
                    <input type='text' id='text' name='text' autofocus placeholder='type here'>
                    <input type='submit' id='btn_send' name='sub' value='Send'></input>
                </form>
            </div>
        </div>
        <script>
            function display_chats() {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open('GET', 'form-cont.php', false);
                xmlhttp.send(null);
                document.getElementById('data').innerHTML = xmlhttp.responseText;
            }
            display_chats();
            setInterval(()=> {
                display_chats();
            }, 2000);
            $('#adele').on('click', (event)=> {
                console.log('preventing');
                event.stopPropagation();
                event.preventDefault();
            });
            $('#btn_send').click(function(e) {
                var data = $("#text").serialize();
                // 
                $.ajax({
                        data: data,
                        type: "POST",
                        url: "./insert.php",
                        success: function(data){
                            console.log('reseting');
                            document.getElementById('my_form').reset();    
                    }
                });
            });
            $('#my_form').submit(()=> {
                return false;
            });
            $(document).on('pagebeforeshow', '#page2', function(e, data){     
                alert("user id is " + data.prevPage.find('#user_id').val());
            });
        </script>
        
    </body>
</html>
