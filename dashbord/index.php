<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Dashbord</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Fancy Sliding Form with jQuery" />
        <meta name="keywords" content="jquery, form, sliding, usability, css3, validation, javascript"/>

        <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="sliding.form.js"></script>
    </head>
    <script type="text/javascript">
        $(document).ready(function() {
            var inputCount = 1; // Counter for new input fields

            // Add a new input field when the "+" button is clicked
            $('#addButton').click(function(e) {
                e.preventDefault(); // Prevent default button action

                // Increment the input field count
                inputCount++;

                // Create a new input field and append it to the container
                $('' +
                    '<label for="tagname' + inputCount + '">Enter URL ' + inputCount + '</label>' +
                    '<input id="tagname' + inputCount + '" name="tagname' + inputCount + '" type="URL" AUTOCOMPLETE=OFF />' +
                    '').insertBefore('#addButton');
            });
        });
    </script>
    <style>
        span.reference{
            position:fixed;
            left:5px;
            top:5px;
            font-size:10px;
            text-shadow:1px 1px 1px #fff;
        }
        span.reference a{
            color:#555;
            text-decoration:none;
			text-transform:uppercase;
        }
        span.reference a:hover{
            color:#000;
            
        }
        h1{
            color:#ccc;
            font-size:36px;
            text-shadow:1px 1px 1px #fff;
            padding:20px;
        }
    </style>
    <body>
        <div>
            <span class="reference">
                
            </span>
        </div>
        <div id="content">
            <h1>Login Information</h1>
            <div id="wrapper">
                <div id="steps">
                    <form id="formElem" name="formElem" action="main_dashbord.php" method="post" enctype="multipart/form-data">
                       
                        <fieldset class="step">
                            <legend>About Us</legend>
                            <p>
                                <label for="name">Name</label>
                                <input id="name" name="name" type="text" AUTOCOMPLETE=OFF />
                            </p>
                           
                            <p>
                                <label for="about">About Me</label>
                                <textarea
                                input id="about" name="about" placeholder="Enter Your details" type="text" AUTOCOMPLETE=OFF ></textarea>
                            </p>
                            <p>
                                <label for="cardtype">PROFESSION</label>
                                <select id="cardtype" name="cardtype">
                                    <option>STUDENT</option>
                                    <option>DEVLOPER</option>
                                    <option>PROFFESOR</option>
                                </select>
                            </p>
                            <p>
                                <label for="skills">ADD SKILLS</label>
                                <textarea
                                 id="skills" name="skills" placeholder="ENTER YOUR SKILLS" type="text" AUTOCOMPLETE=OFF> </textarea>
                            </p>
                        </fieldset>
                        <fieldset class="step">
                            <legend>Social LINKs</legend>
                            <p>
                            <label for="google_site">Enter Googlesite Link</label>
                            <input id="google_site" name="link1" type="URL" AUTOCOMPLETE=OFF /></p>
                            <p>
                            <label for="linkdin">Enter Linkdin Link</label>
                            <input id="linkdin" name="link2" type="URL" AUTOCOMPLETE=OFF /></p>
                            <p>
                            <label for="blog">Enter Blog Link</label>
                            <input id="blog" name="link3" type="URL" AUTOCOMPLETE=OFF />
                        </p>
                        <p>
                            <label for="Github">Enter Github LINK</label>
                            <input id="Github" name="link4" type="URL" AUTOCOMPLETE=OFF />
                           </p> 
                        </fieldset>
                        <fieldset class="step">
                            <legend>ASSIGNMENTS</legend>
                            <p>
                                <label for="task">ASSIGNMENT</label>
                                <select id="task" name="task">
                                    <option id="task" value="Task1" selected>Task1</option>
                                    <option value="Task2">Task2</option>
                                    <option value="Task3">Task3</option>
                                    <option value="Task4">Task4</option>
                                    <option value="Task5">Task5</option>
                                    <option value="project-module">Minore Project Module</option>
                                    <option value="Database-module">database module</option>
                                </select>
                            </p>
                            <p class="task">
                               
                               
                                      <label for="tagname">Enter URL</label>
                                      <input id="tagname" name="tagname" type="URL" AUTOCOMPLETE=OFF />
                                      <button id="addButton" name="add">+</button> 
                               

    
                            </p>
                            <p>
                                <label for="project">Enter Project Details</label>
                                <textarea
                                 id="project" name="project1" placeholder="ENTER YOUR Project Details Here" type="text" AUTOCOMPLETE=OFF> </textarea>
                            </p>
							
                        </fieldset>
                        <fieldset class="step">
                            <legend>Menus</legend>
                            
                            <p>
                                <label for="menu1">Enter Menu</label>
                            <input id="menu1" name="menu1" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="menu2">Enter Menu</label>
                            <input id="menu2" name="menu2" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="menu3">Enter Menu</label>
                            <input id="menu3" name="menu3" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            

                        </fieldset>
                        <fieldset class="step">
                            <legend>image</legend>
                            <p>
                                <label for="titleh">Enter Header Title</label>
                            <input id="titleh" name="titleh" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="file">Enter Header logo</label>
                            <input type="file" name="pfile" id="file">
                            </p>
                            <p>
                                <label for="title">Enter Footer</label>
                            <input id="title" name="title" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="logo2">Enter Footer logo</label>
                            <input id="logo2" name="logo2" type="file" AUTOCOMPLETE=OFF />
                            </p>

                        </fieldset>
						<fieldset class="step">
                            <legend>Confirm</legend>
							<p>
								Everything in the form was correctly filled 
								if all the steps have a green checkmark icon.
								A red checkmark icon indicates that some field 
								is missing or filled out with invalid data. In this
								last step the user can confirm the submission of
								the form.
							</p>
                            <p class="submit">
                               <a><input id="registerButton" type="submit" value="Register" name="submit" ></a>
                            </p>
                        </fieldset>
                    </form>
                </div>
                <div id="navigation" style="display:none;">
                    <ul>
                        
                        <li class="selected">
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Links</a>
                        </li>
                        <li>
                            <a href="#">Assignment</a>
                        </li>
                        <li>
                            <a href="#">Menu</a>
                        </li>
                        <li>
                            <a href="#">Image</a>
                        </li>
						<li>
                            <a href="#">Confirm</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </body>
</html>
  