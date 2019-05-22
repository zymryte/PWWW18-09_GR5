<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html manifest="manifest.appcache">
    <head>
        <title>Programs</title>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="jquery-3.3.1.min.js"></script>
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"  crossorigin="anonymous">
        <style type="text/css" onload="answer.reset()">
            header{
                background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url( "School1.jpg" );
                height:800px;
                margin:-10px;
                background-size: cover;
                background-position: center;

            }
            .navigacioni {
                 overflow: hidden;
                 background-color: rgba(0,0,0,0.2);
                 margin:0px;


                }

    .navigacioni a,.navigacioni p {
                   
                   display:inline-block;
                   color: #e8ddcf;
                   text-align: center;
                   padding: 5px 16px 1px 1em;
                   text-decoration: none;

                }

     .navigacioni a:hover {
                  text-decoration: overline;
                     }



            body{ font-family: Goudy Old Style, Garamond, Big Caslon, Times New Roman, serif;
                   background-color:#F5F5DC;}

           .prog{ padding:60px;
                  -webkit-column-count: 3;
                  column-count: 3;
                  -webkit-column-gap: 40px;
                  text-align: center;
                 column-gap: 40px;
                  font-family: Goudy Old Style, Garamond, Big Caslon, Times New Roman, serif;


           }
           .prog p{
               color:#800000;
                   font-size:20px;
           }

                   #centered {
                   position: absolute;
                   top: 50%;
                   left: 50%;
                   transform: translate(-50%, -50%);
                   font-family: "cursive",Brush Script MT;
                   font-weight:100;
                   font-size:70px;
                   color:#e8ddcf;
                   text-shadow:-3px 3px 3px #000000;

                   }
                     .article{ padding:20px;
                      text-align:center;

                    }

                    .article h3{
                        color:#efd098;
                        font-size:30px;
                    }

                    .article h4{
                        font-size:20px;
                        color:#662200;

                    }
                    .title{
                        font-size:30px;
                        color:#e6b800;
                    }

                    .image{
                         opacity: 1;
                         display: block;
                         width: 100%;
                         height: auto;
                         transition: .5s ease;
                         backface-visibility: hidden;


                    }


                    footer {

                    font-family: Goudy Old Style, Garamond, Big Caslon, Times New Roman, serif;
                    padding: 0px;
                    text-align: center;
                    background-color: #e2b240;
                    position: relative;
                    margin:0px;
                    color:white;



                }
                    footer a:link{color:#4d1a00;
                   text-decoration: none;}

               footer  a:hover{color: #ff5500;}
               footer a:visited{color:#1a0900;}

               footer p{font-size:25px;}
               .contact{
                     padding:20px;
                     width:100%;
                   display:inline-block;;
                        width:30%;
               text-align: center;}
               
               .quiz{
                   padding:30px;



               }
      button{width: 10%;
      padding: 12px 12px;
      margin: 0px 0;
      box-sizing: border-box;
      }

      input[type=range]{
      width: 30%;
      margin-top: 10px;
      box-sizing: border-box;

      border: 0;
     }

     .students{
         column-count: 3;
         column-gap: 40px;

     }
     #center{
                   position: relative;
                   top: 30%;
                   left: 30%;
                   transform: translate(-35%, -200%);
                   font-family: Goudy Old Style, Garamond, Big Caslon, Times New Roman, serif;
                   font-size:20px;
                   color:#ff6680;
                   text-shadow:-1px 0px 0px #000111;
                   text-align: center;

                   }
                  #imazhi{opacity:1;}
                  #imazhi:hover{
                      opacity:0.8;
                  }
     #butoni{
         background-image:url("space.jpg");
         height:100px;
         width:300px;
         border-color: pink;
         font-size:20px;
         margin:5% 37%;
         cursor:pointer;
         font-family: Goudy Old Style, Garamond, Big Caslon, Times New Roman, serif;
        color:#662200;
        outline: 4px solid pink;
        outline-offset: 5px;
        resize: horizontal;



     }

        </style>


        <script>

$(document).ready(function(){
  $("#butoni").click(function(){
    $("#student1").fadeToggle();
    $("#student2").fadeToggle("slow");
    $("#student3").fadeToggle(2000);
  });
});
$(document).ready(function(){
  $("#butoni").click(function(){
    var div = $("#butoni");

    div.animate({fontSize: '2em'}, "slow",function(){
        alert("You can either show or hide images");
    });
    });
  });


        </script>
   </head>
    <body >
        <header>
               <div class="navigacioni">


            <p style="color:#b3b3b3"> <a href="index.html"  style="text-decoration:none; font-size:25px;">ModernSchool</a><br>Discover MS</p>
              <nav style="float:right">
                <p><a href="index.html">HOME</a><br/>Internships</p>
                <p><a href="programs.html"target="_self">PROGRAMS</a><br/>Get informed</p>
                <p><a href="Register.html" >REGISTER</a><br/>Not a member?</p>
                <p><a href="www.html" >ACTIVITIES</a><br/>School activities</p>
                <p><a href="About.html">ABOUT US</a> <br/>More</p>



              </nav>

             
            <p id="centered">“Education is the key to unlocking the world,  passport to freedom.”<br> – Oprah Winfrey</p>
           
               </div>
        </header>
        <div class='article'>

            <h1 style='color:#e6b800;'>THE BEST CHOICE FOR YOUR KIDS.</h1>
            <h3>With a wide range of activities including advanced curriculum,arts and crafts,
                imaginative play and physical activities, your child will develop a strong foundation needed to succeed..</h3>
            <h4>Our teachers are very loving and caring, most of our staff have been teaching for a while.  Consistency and comfort are
                extremely important for a successful preschool experience. ModernSchool offers such an environment for staff, children and their families..</h4>
        </div><br><br>
            <div class='prog' >
                <div >
                 <img src="Kidstek.jpg" class="image" id="tek"><br>
                    <span class="title" >Kids-tech</span><br>

                <p >There are plenty of reasons why your child should learn to code, and so we wholeheartedly believe programming to be a
                    vital skill for today’s youth. So do Bill Gates, Mark Zuckerberg, Sheryl Sandberg,
                    Will.i.am, and other notable figures.
                    <a href='https://www.youtube.com/watch?v=nKIu9yen5nc' target='_blank' style='text-decoration:none; '>
                        Watch the video</a> that has garnered over 14 million views since its release.</p><br><br><br>


                <img src="Eco.jpg" class="image"><br>
                <span class='title'>Eco-Kids</span>
                <p> EcoKids offers free learning activities and resources for
                   children to engage in environmental action.
                    EcoKids is designed to inspire children to become life-long environmental stewards through nature connection and play.</p>

                <a href="Math2.html"><img src="Math2.jpg" class="image" ></a><br>
                <span class='title'>Funny-math</span>

               <p>Our math program provides standards-based math curricula,
                   practice activities and games,
                   and fun counting materials, such as small cereal, fruit snacks or colored beads.
               Many students are visual learners, and having tangible items to work with will help get a better
               understanding for mathematical concepts being taught.</p><br><br>

               <img src="Book.jpg" class="image" > <br>
                <span class='title'>Kids’ Choice Book Awards</span>

                    <p>
                       We  choose ten books for kids to read during the year.This helps promotion by
                   hosting book discussions and other activities.We finish the program by having a party or celebration in
                  which kids can vote on their top choice. If enough kids participate you may even be able to host a Battle of the Books.
                  </p>
                    <img src="music.jpg" class="image"> <br>
                    <span class='title'> Karaoke' kids </span>
                     <ol style="list-style-type:disc; font-size:20px; color:#800000; list-style: none;" >
                        <li>Dance-time</li>
                        <li>Pick an instrument!
                            <ul>
                                <li>Guitar</li>
                                <li>Piano</li>
                                <li>Violin</li>
                                <li>Drums</li>

                            </ul></li>
                            <li>Guess the song!</li>
                    </ol>
                    <br><br><br>




                   <img src="Summer1.jpg" class="image"><br>
                        <span class='title'>Summer special</span>

                        <p>  Spending the summer with your friends,at the same time learning
                        something new is always a great idea!We present to you our summer programs:</p>
                        <dl style="color:#800000;">
                        <dt>Watter ballon fight.</dt>
                        <dd>Brain Chase.</dd>
                        <dt>Hiking.</dt>
                        <dd>Horseback Riding</dd>
                        <dt>Wake Boarding, Tubing, and Water Sports</dt>
                       </dl>

            </div>
          
            </div><button id="butoni">Students of the month!</button><br>
        <div class="students">

            <div id="student1"><img src="s1.jpg"  id='imazhi' style="width:90%; height:260px;" alt="This picture cannot be shown">
              
               <p id='center'>David Brown was selected as the most <br>talented kid in Kids' Choice Award.<br>He is only 8 years old.</p></div><br> 
                <div id="student2"><img src="s2.jpg" id='imazhi' style="width:90%; height:260px;" alt="This picture cannot be shown"><p id='center'>
                        Marc McCanzey has won the Math Olympiad <br>for juniors in United States.<br>He is also 8 years old.
                    </p></div><br>
            <div id="student3"><img src="s3.jpg" id='imazhi' style="width:90%; height:260px;" alt="This picture cannot be shown">
                <p id='center'>Anna Falls has learnt to play the guitar<br>,piano and is less than 6 months.She is 7 years old.</p></div>
        </div>
        <div class="quiz">

        <h1  style="font-size: 400%; color:#800000;">Random Math Quiz of the day!!</h1>
        <br>

        <h2 id="question" style="color:black; font-size:30px;"></h2></p>
        <script >
                var minimum = 1;
                var maximum = 100;
                var int1 = Math.floor(Math.random() * (maximum - minimum + 1)) + minimum;
                var int2 = Math.floor(Math.random() * (maximum - minimum + 1)) + minimum;
                document.getElementById('question').innerHTML = int1.toString() + "+" + int2.toString()+"=";
                var qanswer = int1 + int2;

               function fire() {
               var canswer = document.getElementById('answer').value;
               var uanswer=parseInt(canswer);
               if (uanswer ===qanswer) {
               alert("Nice math skills! Refresh the page to play again!");


           } else {
                alert("WRONG! Don't snooze during math class!");
      }
    }

            </script>
        <input type="text" name="answer" id="answer" placeholder="Your answer here"style="width: 250px; height: 40px; font-size: 32px;"/>
        <br><button onclick="fire()" >Enter</button>
         
    
        </div>
         <footer id="footer">

                  <div class="contact">

                      <p id="title"><i class="fas fa-phone">Phone</i></p>
                  <p> (860)555-1234</p>
                  <p>(860)222-5678
                      </p>
                  </div>


                  <div class="contact">
           <address>
               <p id="title"> <i class="fas fa-map-marker-alt">Address</i></p>
                <p>Atlantic Ave</p>
                <p>Brooklyn</p>

           </address>
                  </div>


<div class="contact">
    <p id="title"> <i class="far fa-envelope">Email</i></p>
              <a href="mailto:modernchool@gmail.com">modernschool@gmail.com</a>
              <br><br>
              <form oninput="output.value = parseInt(a.value) + 100">
                <label>Scroll for fun</label><br>
                 0<input type="range" id="a" /> + 100
                   =
                  <output name="output"></output>
              </form>
                  </div>
             <div id="last" style="background-color: #dea521;">
                      <p style="text-align:left; font-size: 18px; padding:5px;">Copyright&copy 2018 ModernSchool | All rights reserved.</p>

                  </div>
</footer>
    </body>

</html>
