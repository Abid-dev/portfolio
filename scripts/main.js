//For preloader fadeout
$(window).on("load", function () {
  $(".loader-wrapper").fadeOut(1000);
});

//for smooth scrolling when clicking different navigation icons
//https://github.com/cferdinandi/smooth-scroll
let scroll = new SmoothScroll('header a[href*="#"]', {
  speed: 1200,
});

// const sections = $(".page_section");
// const navlinks = $(".navigation__link");

// window.addEventListener("scroll", () => {
//   let currentSection = "";

//   sections.each((index, section) => {
//     const sectionTop = section.offsetTop;
//     const sectionHeight = section.clientHeight;

//     //checks if user has scrolled to the bottom of the page in which case contact section should be active
//     const bottom =
//       $(window).scrollTop() >=
//       $("#follow").offset().top +
//         $("#follow").outerHeight() -
//         window.innerHeight;
//     // console.log(pageYOffset);
//     if (pageYOffset >= sectionTop - sectionHeight / 3 && !bottom) {
//       currentSection = section.getAttribute("id");
//       // console.log(currentSection);
//     } else if (bottom) currentSection = "follow";
//   });

//   navlinks.each((index, link) => {
//     link.classList.remove("active");
//     if (link.classList.contains(currentSection)) {
//       link.classList.add("active");
//     }
//   });
// });

//animated stars background
var number_of_star = 100;

var random_number = function (min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
};

var createStars = function () {
  var star_rotation = "move_right;";
  for (var i = 0; i < number_of_star; i++) {
    rot = star_rotation == "move_right;" ? "move_left;" : "move_right;";
    var star_top = random_number(0, document.documentElement.offsetHeight);
    var star_left = random_number(0, document.documentElement.offsetWidth);
    var star_radius = random_number(0, 4);
    var star_duration = random_number(6, 16);

    document.body.innerHTML +=
      "<div class='star' style='top: " +
      star_top +
      "px; left: " +
      star_left +
      "px; width: " +
      star_radius +
      "px; height: " +
      star_radius +
      "px; " +
      "animation-name:" +
      star_rotation +
      "; animation-duration: " +
      star_duration +
      "s;'></div>";
  }
};

createStars();
//for the body background

//contact form functions
const contactSubmitBtn = $("#contactSubmit");
const contactModal = $("#contactModal");
const contactModalCloseBtn = $("#contactModalCloseBtn");
const modal = $(".modal");
const contactModalMessageTitle = $("#contactModalMessageTitle");
const contactModalMessage = $("#contactModalMessage");
const textareaBtn = $("#contactDropdownText");
const contactMessageTextarea = $("#contactMessage");

// toggle text area
textareaBtn.click(function () {
  contactMessageTextarea.toggle(500);
});

contactSubmitBtn.click(function (e) {
  e.preventDefault();
  if (validate()) {
    console.log("tested");
    const enquirerName = $("#enquirerName").val();
    const enquirerEmail = $("#enquirerEmail").val();
    const contactMessage = $("#contactMessage").val();
    $.ajax({
      type: "POST",
      url: "./php/contactForm.php",
      data: {
        name: enquirerName,
        email: enquirerEmail,
        message: contactMessage,
      },
      // dataType: "dataType",
      success: function (response) {
        // console.log(response);
        contactModal.show(500);
        $("#enquirerEmail").val("");
        $("#enquirerName").val("");
        $("#contactMessage").val("");
      },
      error: function () {
        console.log("failed, error occured");
        contactModal.show(500);
      },
    });
  } else {
    contactModal.show(500);
  }
});

contactModalCloseBtn.click(function () {
  contactModal.hide(500);
});

$(window).click(function () {
  if (e.target.className == "modal") {
    modal.hide(500);
  }
});

//email validation
function validateEmail(email) {
  const re =
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validate() {
  const email = $("#enquirerEmail").val();
  const name = $("#enquirerName").val();

  if (email == "" || name == "") {
    contactModalMessageTitle.html("Oops! 😶");
    contactModalMessage.html(
      "I would appreciate it if you could fill in both the name and email fields! Thanks in advance for getting in touch!"
    );
    contactModalMessageTitle.css("backgroundColor", "red");
    return false;
  } else {
    if (validateEmail(email)) {
      contactModalMessageTitle.html("Thank you for getting in touch! 😀");
      contactModalMessage.html(
        "I appreciate you getting in contact and reaching out. I will get in touch with you soon! Have a great day!"
      );
      contactModalMessageTitle.css("backgroundColor", "rgb(1, 1, 58)");

      return true;
    } else {
      contactModalMessageTitle.html("Oops! 😶");
      contactModalMessage.html("You're email seems invalid");
      contactModalMessageTitle.css("backgroundColor", "red");
      return false;
    }
  }
}

// contactSubmitBtn.on("click", validate);

let i = 0;
const txt = `Hello, I'm an Ambitious Businesslike Insightful Developer (ABID) 😉 from London. Float around and enjoy my virtual space 😊`;
const speed = 70; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("balloon-profile-desc").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

typeWriter();
