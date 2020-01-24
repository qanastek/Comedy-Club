$(document).ready(function()
{

  /*Responsive Portrait Images*/
  let ArtisteWidth = $('.ArtisteImg').width();

  $('.ArtisteImg').css({
    'height': ArtisteWidth * 1.25
  });

  /*
  *   Responsive Squared Images
  *   J'ai choisit de le faire avec gallery_presentation et non pas wp-block-gallery car sinon
  *   cela détruit la gallerie contenant les partenaires.
  */
  let imgWidth = $('.gallery_presentation > .blocks-gallery-item > figure > img').width();

  $('.gallery_presentation > .blocks-gallery-item > figure > img').css({
    'height': imgWidth,
    'objectFit': "cover",
    'overflow': "hidden"
  });

  /*Responsive Images Programme*/
  var windowWidth = window.innerWidth;
  var windowHeight = window.innerHeight;

  if (windowWidth > windowHeight)
  {
    $('.picLine1').css({
      'height': $('.contentLine1').height()
    });

    $('.picLine3').css({
      'height': $('.contentLine3').height()
    });
  }

  /*Sort by date*/
  $(".filter-button").click(function()
  {
    let param = $(this).attr('id');

    switch (param)
    {

      case 'all':

        $('.filter').show('fast');

        return 0;

        break;

      default:

        $('.filter').hide('fast');

        $('.' + param).show('fast');

        break;
    }
  });

  // Image post Responsive
  var widthImgPost = $('.img_post').width();
  $('.img_post').css({
    height: widthImgPost/1.76,
  });

  var widthImgPostGallery = $('.content_post .wp-block-gallery li figure img').width();
  $('.content_post .wp-block-gallery li figure img').css({
    height: widthImgPostGallery,
  });

  var widthImgLastestPosts = $('.img_lastest_posts').width();
  $('.img_lastest_posts').css({
    height: widthImgLastestPosts/1.3,
  });

  var widthImgLastestPosts = $('.img_all_posts').width();
  $('.img_all_posts').css({
    height: widthImgLastestPosts/1.3,
  });

  /*$('.itemHeight').css({
    height: $('.img_lastest_posts').height(),
  });*/

  // All posts
  var widthImgAllPosts = $('.AllPosts').width();
  $('.AllPosts').css({
    height: widthImgAllPosts,
  });

  $('.wp-block-table').addClass('table');

  $('.logofooter img').css({
    height: $('.logofooter img').width(),
  });

  if (windowWidth < windowHeight)
  {
    $('.modal-content').css({
      height: 'auto',
      width: '100%',
    });
  }

});

$(window).load(function() {

  // Get the modal
  var modal = document.getElementById("ModalPictures");
  var modalImg = document.getElementById("imgModal");
  var captionText = document.getElementById("caption");

  $('.blocks-gallery-item figure img').click(function(event) {

    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
    $('#mainNav').css({
      display: 'none',
    });

    var windowWidth = window.innerWidth;
    var windowHeight = window.innerHeight;

    // Waiting for the modal to be loaded.
    // After its was loaded we auto centering the image.
    setTimeout( () => {

      // If we are on a phone or tablet format so
      if (windowWidth < windowHeight)
      {
        // Limit the max height of the img
        // And prevent the image of overflow and hidding the closing button
        $('.modal-content').css({
          "max-height": '80vh',
          'object-fit': 'cover',
          'overflow': 'hidden',
        }); 

        var heightImgModal = parseInt($('#imgModal').height());

        var subHeight = windowHeight - heightImgModal;
        var rsltImgCurrent = subHeight / 2;

        $('.modal').css({
          "padding-top": rsltImgCurrent,
        });
      }

    }, 150);

  });

  $('.closeModal').click(function(event) {
    modal.style.display = "none";
    $('#mainNav').css({
      display: 'block',
    });;
  });

});