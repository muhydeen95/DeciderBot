// AOS Animation
AOS.init({
    duration: 1000,// values from 0to 3000, with step 50ms
});



/* ****************** Typed Javascript **************** */
const typed = new Typed('#intro-type',{
    strings: ['Coming Soon!!!',],
    typeSpeed: 40,
    backSpeed: 40,
    startDelay: 1000,
    loop: true
})


/* ============= GO TO TOP SCRIPT ============= */
//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}



//Modal images

var img = document.getElementById("myImg2");
document.addEventListener('click', function(e) {
    var targetId = e.target.id;
    //simple id filter
    if(targetId == "myImg" || targetId == "myImg1" || targetId == "myImg2"
    || targetId == "myImg3" || targetId == "myImg4" || targetId == "myImg5" ){
        img = document.getElementById(e.target.id);
        console.log("img")
        modal.style.display = "block";
        modalImg.src = img.src;
    }
}, false);

var modal = document.getElementById("myModal");

//Get the image and insert it inside the modal - use its "alt" text as a 
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

 //Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
//When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}



// Lets submit the subscribe form
$('#subscriber-form').on('submit', function (e) {
    e.preventDefault();

    $.post(
        "subscribe.php",
        $('#subscriber-form').serialize(),
        function(data) {
            const res = JSON.parse(data);

            if (res.signal === 'ok') {
                toastr.success(res.msg);
                $('#msg').hide();
                $('#subscriber-form input').val(function () {
                    return '';
                });
            } else {
                toastr.error(res.msg);
            }
        }
    );
});
  