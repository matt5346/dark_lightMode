$(document).ready(function() {

    let switchClick = false;

    $('#switch').click(function() {

        if(!switchClick) {
            switchClick = true;
            $("#dark").animate ({
                top:"82%"
            }, 1000);
            $("#light").animate ({
                top:"-40%"
            }, 1000);
            $("#left_block").addClass("move_left")
            $("#right_block").addClass("move_right");
            $("#right_block2").addClass("move_right");
            $("#dark_left_block").addClass("dark_move_left")
            $("#dark_right_block").addClass("dark_move_right");
            $("#dark_right_block2").addClass("dark_move_right");
            $("#cloud_block").addClass("cloud_right");
            $("#cloud_block2").addClass("cloud_right");


            $("#checkbox_title").css("color", "white");
        } else {
            switchClick = false;
            $("#dark").animate ({
                top:"-82%"
            }, 1000);
            $("#light").animate ({
                top:"40%"
            }, 1000);
            $("#left_block").removeClass("move_left")
            $("#right_block").removeClass("move_right");
            $("#right_block2").removeClass("move_right");
            $("#dark_left_block").removeClass("dark_move_left")
            $("#dark_right_block").removeClass("dark_move_right");
            $("#dark_right_block2").removeClass("dark_move_right");
            $("#cloud_block").removeClass("cloud_right");
            $("#cloud_block2").removeClass("cloud_right");
            $("#checkbox_title").css("color", "black");
        }

    })





    })

    const sunPath = "M56 27.5C56 42.6878 43.464 55 28 55C12.536 55 0 42.6878 0 27.5C0 12.3122 12.536 0 28 0C43.464 0 56 12.3122 56 27.5Z";
    const moonPath = "M16 28C16 43.1878 28 54.5 28 55C12.536 55 0 42.6878 0 27.5C0 12.3122 12.536 0 28 0C29 0 16 12.8122 16 28Z"

    const darkMode = document.querySelector("#darkMode");
    const switch_mode = document.getElementById("switch");
    let toggle = false;


    switch_mode.addEventListener('click', () => {
        //Anime js
        const timeline = anime.timeline({
            duration: 750,
            easing: "easeOutExpo"
        })
        timeline
        .add({
            targets: ".sun",
        d: [{value: toggle ? sunPath :  moonPath}]
        })
        .add({
            targets: "#darkMode",
            rotate:  toggle ? 180 : 360
        }, '-=430'
       )
       .add({
           targets: "section",
           backgroundColor: toggle ? 'rgb(255,255,255)' : 'rgb(22,22,22)',
           color: toggle ? 'rgb(22,22,22)' : 'rgb(255,255,255)'
       }, '-=700'
      );
      // Back to sun
      if(!toggle) {
          toggle = true;

      } else {
          toggle = false;
      }


    });






