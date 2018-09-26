    //username script
    //done
    var name = prompt("For starters, what's your name?");
          name = name.toLowerCase();
          if (name === "") {
        name = "User";
    document.getElementById("user_name").innerHTML = name;
          }
          else if (name === "null") {
        name = "User";
    document.getElementById("user_name").innerHTML = name;
          }
          else if (name.includes('mc') === true) {
        name = "User";
    document.getElementById("user_name").innerHTML = name;
          }
          else if (name !== null) {
        document.getElementById("user_name").innerHTML = name;
    }
          else {
        name = "User";
    document.getElementById("user_name").innerHTML = name;
          }
          //Global Vars
          var reply = document.getElementById("reply").value;
          //done

          function update() {
              
              var reply = document.getElementById("reply").value;
              if (reply === "") {
        alert("Please type something to continue!!");
    }
              else {
                  var site = document.getElementById('history');
                  var newElement = document.createElement('p');
                  var underlinedUserName = document.createElement('u');
                  underlinedUserName.appendChild(document.createTextNode(name));

                  newElement.appendChild(underlinedUserName);
                  newElement.appendChild(document.createTextNode(": " + reply));
                  site.appendChild(newElement);
                  autoScroll(0);


                  reply = reply.toLowerCase();
                  //chat instances
                  if (reply.includes('chat') === true) {
        reply = "";
    chatModule();
                  }
                  else if (reply.includes('talk') === true) {
        reply = "";
    chatModule();
                  }
                  else if (reply.includes('hi') === true) {
        chatModule();
    }
                  else if (reply.includes('hello') === true) {
        chatModule();
    }
                  else if (reply.includes('help') === true) {
        listOfCommands();
    }
                  else if (reply.includes('list') === true) {
        listOfCommands();
    }
                  else if (reply == 'profanityfilter = "off";') {
        profanityFilterOff();
    }
                  else if (reply.includes('calc') === true) {
        calculator();
    }
                  else if (reply === "exit") {
        document.getElementById('myPopup').style.display = "none";
    }
                  else if (reply.includes('mahdi') === true) {
        creatorInfo();
    }
                  else {
                      var site = document.getElementById('history');
                      var underlinedMC = document.createElement('u');
                      var errMessage = document.createElement('p');
                      underlinedMC.appendChild(document.createTextNode("MC"));
                      errMessage.appendChild(underlinedMC);
                      errMessage.appendChild(document.createTextNode(": I'm sorry but I wasn't able to understand that!"));
                      site.appendChild(errMessage);
                      autoScroll();
                      defaultMessage();
                  }

              }


          }
          function defaultMessage() {
              var site = document.getElementById('history');
              var newElement = document.createElement('p');
              var underlinedMC = document.createElement('u');
              underlinedMC.appendChild(document.createTextNode("MC"));
              newElement.appendChild(underlinedMC);
              newElement.appendChild(document.createTextNode(": Is there anything else I can help you with?"));
              site.appendChild(newElement);
              autoScroll();
              defaultSubmitButton();

              function defaultSubmitButton() {
                  var submitButton = document.getElementById('submit');
                  submitButton.parentNode.removeChild(submitButton);

                  var defaultSubmitButton = document.createElement('input');
                  var submitSite = document.getElementById('submitSite');
                  defaultSubmitButton.setAttribute('type', 'button');
                  defaultSubmitButton.setAttribute('id', 'submit');
                  defaultSubmitButton.setAttribute('class', 'user_input');
                  defaultSubmitButton.setAttribute('onclick', 'update()');
                  defaultSubmitButton.setAttribute('value', 'Submit');
                  var lineBreak = document.createElement('br');
                  var lineBreak2 = document.createElement('br');
                  submitSite.appendChild(lineBreak);
                  submitSite.appendChild(lineBreak2);
                  submitSite.appendChild(defaultSubmitButton);
              }

          }
          function creatorInfo() {
              var site = document.getElementById('history');
              //header
              var newElement = document.createElement('p');
              var underlinedMC = document.createElement('u');
              underlinedMC.appendChild(document.createTextNode("MC"));
              newElement.appendChild(underlinedMC);
              newElement.appendChild(document.createTextNode(": Mahdi is:"));
              site.appendChild(newElement);
              //list
              var list = document.createElement('ul');
              site.appendChild(list);
              //listItem1:
              var listItem1 = document.createElement('li');
              listItem1.appendChild(document.createTextNode("My Creator."));
              list.appendChild(listItem1);
              //listItem2:
              var listItem2 = document.createElement('li');
              listItem2.appendChild(document.createTextNode("My Leader."));
              list.appendChild(listItem2);
              //listItem3:
              var listItem3 = document.createElement('li');
              listItem3.appendChild(document.createTextNode("My Everything."));
              list.appendChild(listItem3);
              //Auto-Biography of Mahdi as of Now (Needs to be updated regularly!!!)
              var autoBiography = document.createElement('p');
              var underlinedMC1 = document.createElement('u');
              var ending = document.createElement('h2');
              ending.setAttribute('style', 'text-align:center;');
              var underlinedMC2 = document.createElement('u');
              var lineBreak = document.createElement('br');
              var autoBiographyContent = `: Mahdi was born in McAllen, Texas. At age three, he moved to
              Bishop, California 93514 due to the fact that his mother had gotten a job at Texas. He grew up
              by going to the nearby Elementary School and Middle School. He chose to be an over-achiever by
              trying to get really good grades such as A's and even some A+'s, if possible. All three years at
              the Middle School, HSMS [(Home Street Middle School), (because that was the name of the street that
              passed right in front of the school)], he made it to the "Honor Roll Parties" (gatherings where people
              who got "Honor Roll" all three times possible in a school year would watch a movie, get a free dinner that
              included: a hamburger (with fresh-grilled meat patties), a bag of chips, a canned drink or a Gatorade, and
              later, the teachers would make the children Root-Beer Floats with Vanilla Ice Cream. It was the best. But I'm
              getting side-tracked. As he was growing up, he made only a couple of friends and many acquaintances.
              Half-way through his "Freshman Year" at BUHS (Bishop Union High School), his mom got another job in Irvine
              so they had to move to Irvine right after the end of the first semester.`;
              underlinedMC1.appendChild(document.createTextNode("MC"));
              autoBiography.appendChild(underlinedMC1);
              autoBiography.appendChild(document.createTextNode(autoBiographyContent));
              site.appendChild(autoBiography);

              underlinedMC2.appendChild(document.createTextNode("MC"));
              ending.appendChild(underlinedMC2);
              ending.appendChild(document.createTextNode(": To Be Continued..."));
              site.appendChild(ending);
              site.appendChild(lineBreak);
              autoScroll(0);
              defaultMessage();
          }

          function profanityFilter(word) {
        word = word;
    }

          function autoScroll(delay) {
        setTimeout(function () {
            var elem = document.getElementById('content');
            elem.scrollTop = elem.scrollHeight;
        }, Number(delay));
    }
          //not done
          function listOfCommands() {
              var site = document.getElementById('history');
              //header
              var newElement = document.createElement('p');
              var underlinedMC = document.createElement('u');
              underlinedMC.appendChild(document.createTextNode("MC"));
              newElement.appendChild(underlinedMC);
              newElement.appendChild(document.createTextNode(": Here is a list of commands I can work with:"));
              site.appendChild(newElement);
              //list
              var list = document.createElement('ul');
              site.appendChild(list);
              //listItem1:
              var listItem1 = document.createElement('li');
              listItem1.appendChild(document.createTextNode("Calculator: Opens the scientific calculator."));
              list.appendChild(listItem1);
              //listItem2:
              var listItem2 = document.createElement('li');
              listItem2.appendChild(document.createTextNode("Chat: Have a discussion with me."));
              list.appendChild(listItem2);
              //listItem4:
              var listItem4 = document.createElement('li');
              listItem4.appendChild(document.createTextNode("Exit: Closes MC."));
              list.appendChild(listItem4);
              //listItem3:
              var listItem3 = document.createElement('li');
              listItem3.appendChild(document.createTextNode("Mahdi: See what happens. (You're in for a surprise!)"));
              list.appendChild(listItem3);
              //lastListItem
              var lastListItem = document.createElement('li');
              lastListItem.appendChild(document.createTextNode('profanityFilter = "off"; : Turns off the profanity filter.'));
              list.appendChild(lastListItem);

              autoScroll(0);

          }
          //done
          function profanityFilterOff() {
              var site = document.getElementById('history');
              //psych
              var newElement = document.createElement('h1');
              newElement.appendChild(document.createTextNode("Psych!!!"));
              site.appendChild(newElement);
              //info
              var newElement1 = document.createElement('p');
              var underlinedMC = document.createElement('u');
              underlinedMC.appendChild(document.createTextNode("MC"));
              newElement1.appendChild(underlinedMC);
              newElement1.appendChild(document.createTextNode(": This option is not available. Please don't check again later."));
              site.appendChild(newElement1);
              //innocent question
              var innocentQuestion = document.createElement('p');
              var underlinedMC1 = document.createElement('u');
              underlinedMC1.appendChild(document.createTextNode("MC"));
              innocentQuestion.appendChild(underlinedMC1);
              innocentQuestion.appendChild(document.createTextNode(": Anything else I can assist you in?"));
              site.appendChild(innocentQuestion);
              autoScroll(0);

          }
          //not done
          function chatModule() {
        function chat1() {
            var reply = document.getElementById("reply").value;
            var site = document.getElementById('history');
            var newElement = document.createElement('p');
            var underlinedMC = document.createElement('u');
            underlinedMC.appendChild(document.createTextNode("MC"));

            var underlinedMC1 = document.createElement('u');
            underlinedMC1.appendChild(document.createTextNode("MC"));


            newElement.appendChild(underlinedMC);
            newElement.appendChild(document.createTextNode(": Ok. Let's Chat."));
            site.appendChild(newElement);

            var newElement1 = document.createElement('p');
            newElement1.appendChild(underlinedMC1);
            newElement1.appendChild(document.createTextNode(": How's Life?"));
            site.appendChild(newElement1);
            autoScroll(0);

            var submitButton = document.getElementById('submit');
            submitButton.parentNode.removeChild(submitButton);

            var chatSubmitButton = document.createElement('input');
            var submitSite = document.getElementById('submitSite');
            chatSubmitButton.setAttribute('type', 'button');
            chatSubmitButton.setAttribute('id', 'submit');
            chatSubmitButton.setAttribute('class', 'user_input');
            chatSubmitButton.setAttribute('onclick', 'chat2()');
            chatSubmitButton.setAttribute('value', 'Submit');
            var lineBreak = document.createElement('br');
            var lineBreak2 = document.createElement('br');
            submitSite.appendChild(lineBreak);
            submitSite.appendChild(lineBreak2);
            submitSite.appendChild(chatSubmitButton);


        }
              //chat record script: IF YOU ARE READING THIS, PLEASE HELP ME!!!!!!!
              function chat2() {
                  var reply = document.getElementById("reply").value;


                  var site = document.getElementById('history');
                  var newElement = document.createElement('p');
                  var underlinedUserName = document.createElement('u');
                  underlinedUserName.appendChild(document.createTextNode(name));

                  newElement.appendChild(underlinedUserName);
                  newElement.appendChild(document.createTextNode(": " + reply));
                  site.appendChild(newElement);
                  autoScroll(0);

                  reply = reply.toLowerCase();

                  if (reply.includes("great") === true) {
                      var underlinedMC1 = document.createElement('u');
                      underlinedMC1.appendChild(document.createTextNode("MC"));
                      var newElement2 = document.createElement('p');
                      newElement2.appendChild(underlinedMC1);
                      newElement2.appendChild(document.createTextNode(": That's good!! Yeah, I'm feeling great too..."));
                      site.appendChild(newElement2);
                      ageQuestion();
                      autoScroll(0);
                      replaceButton();
                  }
                  else if (reply.includes("ok") === true) {
                      var underlinedMC1 = document.createElement('u');
                      underlinedMC1.appendChild(document.createTextNode("MC"));
                      var newElement2 = document.createElement('p');
                      newElement2.appendChild(underlinedMC1);
                      newElement2.appendChild(document.createTextNode(": That's good!! Yeah, I'm feeling great."));
                      site.appendChild(newElement2);
                      ageQuestion();
                      autoScroll(0);
                      replaceButton();
                  }
                  else if (reply.includes("suck") === true) {
                      var underlinedMC1 = document.createElement('u');
                      underlinedMC1.appendChild(document.createTextNode("MC"));
                      var newElement2 = document.createElement('p');
                      newElement2.appendChild(underlinedMC1);
                      newElement2.appendChild(document.createTextNode(": Oh, too bad."));
                      site.appendChild(newElement2);
                      ageQuestion();
                      autoScroll(0);
                      replaceButton();
                  }
                  else if (reply.includes("bad") === true) {
                      var underlinedMC1 = document.createElement('u');
                      underlinedMC1.appendChild(document.createTextNode("MC"));
                      var newElement2 = document.createElement('p');
                      newElement2.appendChild(underlinedMC1);
                      newElement2.appendChild(document.createTextNode(": Oh, that's too bad!! I hope you feel better shortly!"));
                      site.appendChild(newElement2);
                      ageQuestion();
                      autoScroll(0);
                      replaceButton();
                  }
                  else {
                      var underlinedMC1 = document.createElement('u');
                      underlinedMC1.appendChild(document.createTextNode("MC"));
                      var newElement2 = document.createElement('p');
                      newElement2.appendChild(underlinedMC1);
                      newElement2.appendChild(document.createTextNode(": Anyway,"));
                      site.appendChild(newElement2);
                      ageQuestion();
                      autoScroll(0);
                      replaceButton();
                      autoScroll();
                  }
                  function replaceButton() {
                      var submitButton = document.getElementById('submit');
                      submitButton.parentNode.removeChild(submitButton);

                      var chatSubmitButton = document.createElement('input');
                      var submitSite = document.getElementById('submitSite');
                      chatSubmitButton.setAttribute('type', 'button');
                      chatSubmitButton.setAttribute('id', 'submit');
                      chatSubmitButton.setAttribute('class', 'user_input');
                      chatSubmitButton.setAttribute('onclick', 'age()');
                      chatSubmitButton.setAttribute('value', 'Submit');
                      submitSite.appendChild(chatSubmitButton);
                  }
              }
              function ageQuestion() {
                  var reply = document.getElementById("reply").value;
                  var site = document.getElementById('history');
                  var newElement = document.createElement('p');
                  var underlinedMC = document.createElement('u');
                  underlinedMC.appendChild(document.createTextNode("MC"));
                  newElement.appendChild(underlinedMC);
                  newElement.appendChild(document.createTextNode(": How old are you?"));
                  site.appendChild(newElement);
              }
              function age() {
                  var reply = document.getElementById("reply").value;
                  var site = document.getElementById('history');
                  var newElement = document.createElement('p');
                  var underlinedMC = document.createElement('u');
                  underlinedMC.appendChild(document.createTextNode("MC"));
                  newElement.appendChild(underlinedMC);


                  var submitButton = document.getElementById('submit');
                  submitButton.parentNode.removeChild(submitButton);

                  var chatSubmitButton = document.createElement('input');
                  var submitSite = document.getElementById('submitSite');
                  chatSubmitButton.setAttribute('type', 'button');
                  chatSubmitButton.setAttribute('id', 'submit');
                  chatSubmitButton.setAttribute('class', 'user_input');
                  chatSubmitButton.setAttribute('onclick', 'ageCheck()');
                  chatSubmitButton.setAttribute('value', 'Submit');
                  var lineBreak = document.createElement('br');
                  var lineBreak2 = document.createElement('br');
                  submitSite.appendChild(lineBreak);
                  submitSite.appendChild(lineBreak2);
                  submitSite.appendChild(chatSubmitButton);


                  autoScroll(0);

                  reply = Number(reply);

                  ageCheck();
                  function post() {
                      if (reply === "") {
        alert("Please type something to continue!!");
    }
                      else {

                          var newElementPost = document.createElement('p');
                          var underlinedUserName = document.createElement('u');
                          underlinedUserName.appendChild(document.createTextNode(name));

                          newElementPost.appendChild(underlinedUserName);
                          newElementPost.appendChild(document.createTextNode(": " + reply));
                          site.appendChild(newElementPost);
                          autoScroll(0);
                      }
                  }



                  function ageCheck() {
                      if (reply <= 18 && reply >= 4) {
        post();
    var underlinedMC1 = document.createElement('u');
                          var newElement1 = document.createElement('p');
                          underlinedMC1.appendChild(document.createTextNode("MC"));
                          newElement1.appendChild(underlinedMC1);
                          newElement1.appendChild(document.createTextNode(": Ok, so how's the school life?"));
                          site.appendChild(newElement1);
                          autoScroll(0);
                          schoolLife();

                      }
                      else if (reply > 18 && reply <= 120) {
        post();
    var underlinedMC1 = document.createElement('u');
                          var newElement1 = document.createElement('p');
                          underlinedMC1.appendChild(document.createTextNode("MC"));
                          newElement1.appendChild(underlinedMC1);
                          newElement1.appendChild(document.createTextNode(": Ok, so how's the adult life?"));
                          site.appendChild(newElement1);
                          autoScroll(0);
                          adultLife();
                      }
                      else if (reply === NaN) {
        alert('Please type in just a number!');
    alert("Make sure it's a reasonable age!");
                          age();
                      }
                      else {
        alert('Please type in just a number!');
    alert("Make sure it's a reasonable age!");
                          age();
                      }
                  }
              }

          }
                        //done
              function calculator() {
                  var modal = document.getElementById('myModal');
                  var span = document.getElementsByClassName("closeCalc")[0];
                  modal.style.display = "block";
                  span.onclick = function () {
        modal.style.display = "none";
    intro();
                  }

                  // When the user clicks anywhere outside of the modal, close it
                  window.onclick = function (event) {
                      if (event.target == modal) {
        modal.style.display = "none";
    intro();
                      }
                  }

              }
              //not done