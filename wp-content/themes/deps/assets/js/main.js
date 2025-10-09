//  CUSTOM JS
(function($) {


    // --- GLOBAL VARS ---------------------------- 

        var last_scroll_top = 0;
        var top_display = 100;
        var owl = $('.js-owl-carousel');

    // END GLOBAL VARS -----------------------------

    //--- Tab-------------------------



    //---Tab-------------------------
    function my_tabs(){
    
    $(".js-tabs-headings li a").click(function () {
        
            event.preventDefault();
            
            var tabId = $(this).id;
            var href= $(this).attr('href');
            var content = $(href);


            $('.js-tabs-headings li a').removeClass("c-tabs__link--active");
            $(this).addClass("c-tabs__link--active");

            $('.js-tabs-content div').addClass("c-tabs__content-tab--fade");

            setTimeout(() => { 
            $('.js-tabs-content div').removeClass("c-tabs__content-tab--active");
            $('.js-tabs-content div').removeClass("c-tabs__content-tab--fade");
            content.addClass("c-tabs__content-tab--active");
            }, 500);
        
        });
    }

    //Submenu -----------------------

    function my_submenu (){

        $('.js-trigger-submenu')
        .mouseenter(function(){


          var elem = $('.c-header__submenu-deps');
           elem.addClass('c-header__submenu-deps--is-active');

       })

       .mouseleave(function(){
        var elem = $('.c-header__submenu-deps');
            elem.removeClass('c-header__submenu-deps--is-active');
        });

    }

    // Subsubmenu -----------------------

        function my_subsubmenu (){

            $('.js-trigger-subsubmenu')
            .mouseenter(function(){
             
              var elem = $('.c-header__subsubmenu-deps');
               elem.addClass('c-header__subsubmenu-deps--is-active');
    
           })
    
           .mouseleave(function(){
            var elem = $('.c-header__subsubmenu-deps');
                elem.removeClass('c-header__subsubmenu-deps--is-active');
            });
    
        }

    //--- Tool tip-------------------------

    function my_tooltip(){

        $('.js-card')

        .mouseenter(function(){

             var id = this.id;
             var elem = $('.js-tooltip' + id );
             
            elem.addClass('c-tool-tip--active');

            setTimeout(() => { 
                 elem.addClass('c-tool-tip--animated');
             }, 100);

        })

        .mouseleave(function(){

             var id = this.id;
             var elem = $('.js-tooltip' + id );
             
            elem.removeClass('c-tool-tip--animated');

            setTimeout(() => { 
                 elem.removeClass('c-tool-tip--active');
             }, 400);

            });
        }

    //Share tools
    function my_shareTools(){
        
        $('#-666')
        .mouseenter(function(){
            $('.js-fa-share-nodes').addClass('c-share__icon--hover');
        })
        .mouseleave(function(){
            $('.js-fa-share-nodes').removeClass('c-share__icon--hover');
        });

    }
    function my_shareToolsTwo(){

        $('#js-share-btn')
        .click(function(){
            $('.c-share__share-btns').addClass('c-share__share-btns--show');
        });

        // .mouseleave(function(){
        //     $('.c-share__share-btns').removeClass('c-share__share-btns--show');
        // });

    }

    //Contador de carácteres
    function my_lengthText(){
        // $('.c-card__tittle-curso').each(function() {
        //     if ($(this).text().length > 50) {
        //         $('.c-card__extract-curso').addClass('u-none');
        //     }
        // });

        $('.c-card__tittle-curso').each(function (index, domEle) {
            if($(domEle).text().length>100)
            {
                // this.style.color = "blue";
                $(this).addClass('not-show-extract');
                
            }
        });
    }

        //Filtros de  perfiles
        function my_lengthPerfiles(){

            // Perfiles 
            var pMedics = $( ".medic" ).length;
            var pNurse = $( ".nurse" ).length;
            var pAll = $( ".all" ).length;
            var pDocente = $( ".docente" ).length;
            var pDirectivo = $( ".directivo" ).length;

            // Vigencia 
            var pDes = $( ".Desactualizado" ).length;
            var pAct = $( ".Vigente" ).length;

            // Temas
            var pDir = $( ".Temas-para-personal-directivo" ).length;
            var pDoc = $( ".Temas-para-personal-con-actividades-docentes" ).length;
            var pPri = $( ".Temas-institucionales-prioritarios" ).length;


            $('#js-count-medic').append('<span>' + pMedics + '</span>');
            $('#js-count-nurse').append('<span>' + pNurse + '</span>');
            $('#js-count-all').append('<span>' + pAll + '</span>');
            $('#js-count-docente').append('<span>' + pDocente + '</span>');
            $('#js-count-directivo').append('<span>' + pDirectivo + '</span>');

            $('#js-count-des').append('<span>' + pDes + '</span>');
            $('#js-count-act').append('<span>' + pAct + '</span>');

            $('#js-count-dir').append('<span>' + pDir + '</span>');
            $('#js-count-doc').append('<span>' + pDoc + '</span>');
            $('#js-count-pri').append('<span>' + pPri + '</span>');

        }

    // --- Menú ---------------------------- 
    function my_toggle_menudropdown(){

        $('.js-toggle-menu-dropdown').off();
        $('.js-toggle-menu-dropdown').click(function(){
            $('.js-menu-dropdown').toggleClass('is-active');
            $('.js-header').toggleClass('is-active');

            $(this).toggleClass('fa-xmark');
        });

    }


    //---Accordion---------

    function my_accordion() {

        $(".js-accordion-content").hide();

        $(".js-accordion-trigger").click(function(){
            $(this).next().slideToggle('slow');
            $(this).toggleClass('c-accordion__active-accordion');

            });
    }

    

   
    //---Form input--------------------------- 
    function my_input() {

     $('input.js-input-inscriptions').blur(function() {
        $('input.js-submit-inscriptions').removeClass("u-none");
      });
     
    }

    // Certification --------------------------- 
    function my_certificate() {
        $('.js-certificateOne-1').addClass('c-curso__content-date-certificate--show');
        $('.js-certificateTwo-1').addClass('c-curso__content-date-certificate--show');
        $('.js-certificateThree-1').addClass('c-curso__content-date-certificate--show');
    }




    //---Modal---------------------------
    function my_modal() {

        $('.js-modal-toggle').off();
        $('.js-modal-toggle').click(function(){

            var id = $(this).data('id');

            $(".js-modal-body").append("<div class='c-modal-backdrop'></div>");
            $('.js-modal-body').addClass('--modal-show');

            setTimeout(() => { 
                 $('.c-modal-backdrop').addClass('c-modal-backdrop--show');
             }, 100);

            setTimeout(() => { 
                $('.js-c-modal[data-id="modal' + id + '"]').addClass('c-modal--show');
             }, 250); 

            setTimeout(() => { 
                 $('.c-modal__content[data-id="modal' + id + '"]').addClass('c-modal__content--show');
             }, 300);


        });

        $('.js-bt-modal').click(function(){
   
           
            $('.js-c-modal').removeClass('c-modal--show')
            $('.c-modal__content').removeClass('c-modal__content--show');
            $('.js-modal-body').removeClass('--modal-show');

            setTimeout(() => { 
                $('.c-modal-backdrop').removeClass('c-modal-backdrop--show');
                $('.c-modal-backdrop').remove();
            }, 300);
        });


    }


    function my_tags(){ 
        $('.js-tag--personal-de-enfermeria').append('<small class="o-text--small">Enfermería</small>');
        $('.js-tag--personal-multidisciplinario-de-salud').append('<small class="o-text--small">Multidisciplinario</small>');
        $('.js-tag--personal-medico').append('<small class="o-text--small">Médicos</small>');
        $('.js-tag--personal-docente').append('<small class="o-text--small">Docentes</small>');
        $('.js-tag--personal-directivo').append('<small class="o-text--small">Directivo</small>');
    }


    function my_carousel(){


      $('.js-owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        responsiveClass: true,
        dotsSpeed: 1000,
        navSpeed: 1000,
        items: 1,
        nav: true,
        dots: false,

        responsive: {
          600: {
            dots: false,
            nav: true,
            autoplay: true,
            autoplayTimeout: 8000,
            autoplaySpeed: 1000,
          },
        }

      })


      $('.js-owl-carousel-main').owlCarousel({
        center: true,
        items: 2,
        loop: false,
        margin: 15,
        nav: false,
        autoplay: false,
        autoplayTimeout: 6000,
        autoplaySpeed: 1000,
        navSpeed: 1000,
        responsive:{
            501:{
                center: true,
                autoplay: false,
                items: 2,
                margin: 15,
            },

            655:{
                items: 2,
                center: true,
                loop: false,
                nav: true,
                autoplay: true,
            },

            840:{
                autoplay: true,
                center: false,
                items: 3,
                loop: false,
            }
        }

      })


      $('.js-owl-carousel-relation').owlCarousel({
        center: true,
        items: 2,
        loop: false,
        margin: 16,
        nav: false,
        autoplay: false,
        autoplayTimeout: 6000,
        autoplaySpeed: 1000,
        navSpeed: 1000,
        responsive:{
            501:{
                center: true,
                items: 2,
                margin: 15,
            },

            600:{
                items: 3,
                center: false,
            },

            992:{
                center: true,
                items: 4,
                loop: true,
                margin: 32,
 
            },

             1400:{
                center: true,
                items: 5,
                loop: true,
                autoplay: true, 

             }
        }

      })

        owl.owlCarousel();
        // Listen to owl events:
        owl.on('changed.owl.carousel', function(event) {
            setTimeout(() => { 
                $('.js-animate-text').toggleClass('animation-slide-in-up');
             }, 100);

        })

     }


    function my_top(){

        $('.c-catalogo__page-lits').on("click",function(){
              $(window).scrollTop(0);
        });

    }


    function my_videoControl(){

        $('.js-bt-modal--video').on('click',function(){
            $('#videoModal').trigger('pause');
        });

    }



    // END GLOBAL FUNCTIONS ---------------------------- 

    // --- ON LOAD --------------------------------------
    $(function () {

        my_videoControl();
        my_top();
        my_subsubmenu ();
        my_submenu ();
        my_shareToolsTwo();
        my_shareTools();
        my_lengthPerfiles();
        my_lengthText();
        my_certificate();
        my_tags();
        my_tabs();
        my_tooltip();
        my_accordion();
        my_input();
        my_modal();
        my_carousel();
        my_toggle_menudropdown();

    });
    // END ON LOAD --------------------------------------


})(jQuery);
