<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000" />
    <title>Your Laravel App</title>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
   
     <link rel="stylesheet" href="assets/css/style.css"/>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



    <style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Default styles for larger screens */
        body {
            max-width: 100%;
            margin: 0 auto; /* Center the body */
        }

        /* Adjust styles for smaller screens */
        @media only screen and (max-width: 600px) {
            body {
                max-width: 100%;
                margin: 0 auto; /* Center the body */
            }
        }

        /* Adjust styles specifically for iPhone SE */
        @media only screen and (max-width: 320px) and (max-height: 568px) {
            body {
                max-width: 100%;
                margin: 0 auto; /* Center the body */
            }
        }

       



            .search-container {
                text-align: center;
                margin: 50px;    
            }

            .nosubmit {
                padding: 10px;
                width: 300px;
                border: none;
                border-radius: 5px;
                background-color: white; /* Set the background color of the search bar */
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                font-size: 16px;
                outline: none;
            }
            .containernav {
            display: flex;
            justify-content: center;
            background-color: white;
            }

            ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
          
            }

            li {
            display: inline-block;
            margin-right: 20px; /* Add space between list items */
            position: relative; /* Position relative for dropdown positioning */
            }

            li:last-child {
            margin-right: 0; /* Remove margin from the last list item */
            }

            li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            }

            .dropbtn {
                background-color: white;
                color: white;
                padding: 16px;
                font-size: 14px;
                border: none;
                }

                .dropdown {
                position: relative;
                display: inline-block;
                }

                .dropdown-content {
                    display: none;
                 position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                 box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                /* z-index: 1;  */
                }

                .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                }

                .dropdown-content a:hover {background-color: #ddd;}

                .dropdown:hover .dropdown-content {display: block;}

                .dropdown:hover .dropbtn {background-color: white;}




                .card {
                    background-color: #F2F2F2;
                    padding: 20px;
                    margin: 10px;
                    border-radius: 8px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    max-width: auto;
                   
                }

                .center-block {
                    margin-left: auto;
                    margin-right: auto;
                    display: block;
                }

                footer {
                    color:white;
                    background-color: #4596FF;
                    padding: 20px;
                    text-align: center;
                }

                /* Style for the columns within the footer */

                .column {
                    display: inline-block;
                    margin: 20px 100px; 
                    vertical-align: top;
                }


             

                    label {
                        display: block;
                        margin-bottom: 5px;
                        margin-left:-85px;
                    }

                    input[type="text"] {
                        width: 200px;
                        padding: 8px;
                        box-sizing: border-box;
                        margin-right: -3px; 
                    }

                    button {
                        padding: 8px 16px;
                        background-color: #3A86FF;
                        color: white;
                        border: none;
                        cursor: pointer;
                    }

                    .social-icons {
                        font-size: 20px;
                        margin-left: -15px; 
                        
                    }

                    .social-icons a {
                        margin: 0 10px;
                        color: white; 
                        text-decoration: none;
                    }
                    .custom-background {
                        background-color: #4596FF;
                    }

                    #status-bar {
                        background-color:white;
                        border: 1px solid black;
                        border-radius: 10px;
                        padding: 5px;
                        margin: 0;
                    }

                    .searchbarhead{
                        background:#4596FF;
                        display: flex; 
                        justify-content: space-between;
                        align-items: center;
                        padding: 5px; 
                    }



                    /*style for register screen */

                      a {
                        text-decoration: none;
                      }

                      body {
                        /* background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b); */
                        background-repeat: no-repeat;
                        margin: 0;
                        padding: 0;
                        background-color: #f0f0f0;
                      }

                      label {
                        font-family: "Raleway", sans-serif;
                        font-size: 11pt;
                      }

                      #forgot-pass {
                        color: #2dbd6e;
                        font-family: "Raleway", sans-serif;
                        font-size: 10pt;
                        margin-top: 3px;
                        text-align: right;
                      }

                      #card {
                        background: #fbfbfb;
                        border-radius: 8px;
                        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
                        height: auto;
                        margin: 6rem auto 8.1rem auto;
                        width: 329px;
                        margin-bottom: 0; /* Remove bottom margin */
                      }

                      #card-content {
                        padding: 12px 44px;
                      }

                      #card-title {
                        font-family: "Raleway Thin", sans-serif;
                        letter-spacing: 4px;
                        padding-bottom: 23px;
                        padding-top: 13px;
                        text-align: center;
                      }

                      #signup {
                        color: black;
                        font-family: "Raleway", sans-serif;
                        font-size: 10pt;
                        margin-top: 16px;
                        text-align: center;
                      }

                      #submit-btn {
                        /* background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e); */
                        border: none;
                        border-radius: 21px;
                        box-shadow: 0px 1px 8px white;
                        /* Change the color to white */
                        cursor: pointer;
                        color: black;
                        font-family: "Raleway SemiBold", sans-serif;
                        height: 42.3px;
                        margin: 0 auto;
                        margin-top: 50px;
                        transition: 0.25s;
                        width: 153px;
                      }

                      #submit-btn:hover {
                        box-shadow: 0px 1px 18px #24c64f;
                      }

                      .form {
                        align-items: left;
                        display: flex;
                        flex-direction: column;
                      }

                      /* .form-border {
                          background: -webkit-linear-gradient(right, black, #2ec06f); 
                        height: 1px;
                        width: 100%;
                      } */

                      .form-content {
                        background: #fbfbfb;
                        border: none;
                        outline: none;
                        padding-top: 14px;
                      }

                      .underline-title {
                        /* background: -webkit-linear-gradient(right, #a6f77b, #2ec06f); */
                        height: 2px;
                        margin: -1.1rem auto 0 auto;
                        width: 89px;
                      }

                      .social-icons {
                        text-align: center;
                        text-align: center;
                        margin-top: 0; /* Remove top margin */
                      }
                      .social-icons button {
                        border: none;
                        background: none;
                        cursor: pointer;
                        padding: 15px; /* Adjust button size */
                      }
                      .social-icons button i {
                        font-size: 24px; /* Adjust icon size */
                      }

                      #login-with {
                        text-align: center;
                        margin-top: 10px;
                        font-size: 20px;
                      }
                      .form input text {
                          background-color: lightblue;
                      }




                    /*style for register screen */


    </style>

</head>
<body>