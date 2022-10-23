<!DOCTYPE html>
<html <?php bloginfo("language"); ?>> 
  <head>
    <meta charset="<?php bloginfo("charset"); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap"
      rel="stylesheet"
    />
    <?php wp_head(); ?>
    <title>
      National Realty Guild - The Leading Real Estate Team In Minneapolis
    </title>
  </head>
  <body class="body" data-body-hidden>
    <div class="modal" data-modal-menu>
      <div class="modal_padding">
        <span class="modal_button"
          ><span class="modal_img_content" data-close
            ><img src="<?php bloginfo(
              "template_url"
            ); ?>/assets/icon/exit.svg" alt="" class="modal_img" /></span
        ></span>
        <span class="modal_title">USEFUL LINKS</span>
        <nav>
          <ul>
            <li class="modal_sentence_list">
              <a href="<?php print_r(
                get_page_link(8)
              ); ?>" class="modal_sentence_link"
                ><span class="modal_svg"
                  ><img src="<?php bloginfo(
                    "template_url"
                  ); ?>/assets/icon/arrow.svg" alt="Mobile menu" class="img"
                /></span>
                <p>Home</p></a
              >
            </li>
            <li class="modal_sentence_list">
              <a href="<?php print_r(
                get_page_link(12)
              ); ?>" class="modal_sentence_link"
                ><span class="modal_svg"
                  ><img src="<?php bloginfo(
                    "template_url"
                  ); ?>/assets/icon/arrow.svg" alt="Mobile menu" class="img"
                /></span>
                <p>Benefits</p></a
              >
            </li>
            <li class="modal_sentence_list">
              <a href="<?php print_r(
                get_page_link(24)
              ); ?>" class="modal_sentence_link"
                ><span class="modal_svg"
                  ><img src="<?php bloginfo(
                    "template_url"
                  ); ?>/assets/icon/arrow.svg" alt="Mobile menu" class="img"
                /></span>
                <p>Sales Growth</p></a
              >
            </li>
            <li class="modal_sentence_list">
              <a href="<?php print_r(
                get_page_link(16)
              ); ?>" class="modal_sentence_link"
                ><span class="modal_svg"
                  ><img src="<?php bloginfo(
                    "template_url"
                  ); ?>/assets/icon/arrow.svg" alt="Mobile menu" class="img"
                /></span>
                <p>Support</p></a
              >
            </li>
            <li class="modal_sentence_list">
              <a href="<?php print_r(
                get_page_link(18)
              ); ?>" class="modal_sentence_link"
                ><span class="modal_svg"
                  ><img src="<?php bloginfo(
                    "template_url"
                  ); ?>/assets/icon/arrow.svg" alt="Mobile menu" class="img"
                /></span>
                <p>Locations</p></a
              >
            </li>
            <li class="modal_sentence_list">
              <a href="<?php print_r(
                get_page_link(20)
              ); ?>" class="modal_sentence_link"
                ><span class="modal_svg"
                  ><img src="<?php bloginfo(
                    "template_url"
                  ); ?>/assets/icon/arrow.svg" alt="Mobile menu" class="img"
                /></span>
                <p>Get Started</p></a
              >
            </li>
            <li class="modal_sentence_list">
              <a href="<?php print_r(
                get_page_link(22)
              ); ?>" class="modal_sentence_link"
                ><span class="modal_svg"
                  ><img src="<?php bloginfo(
                    "template_url"
                  ); ?>/assets/icon/arrow.svg" alt="Mobile menu" class="img"
                /></span>
                <p>Learn More</p></a
              >
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <header class="header" id="below-arrow">
      <div class="header_social_background">
        <ul class="header_social container">
          <li class="header_social_sentence">
            <a href="mailto:admin@nrgadmin.com" class="header_social_links"
              ><span class="header_social_link_svg"
                ><img src="<?php bloginfo(
                  "template_url"
                ); ?>/assets/icon/dark-mail.svg" alt="Mobile menu" /></span
              >Email: admin@nrgadmin.com</a
            >
          </li>
          <li class="header_social_sentence">
            <a href="tel:(651) 330-8000" class="header_social_links"
              ><span class="header_social_link_svg"
                ><img src="<?php bloginfo(
                  "template_url"
                ); ?>/assets/icon/dark-tel.svg" alt="Mobile menu" /></span
              >Call: (651) 330-8000
              <span class="header_svg_accent">9-5 CST</span></a
            >
          </li>
          <li class="header_social_sentence">
            <a href="#" class="header_social_svg"
              ><img src="<?php bloginfo(
                "template_url"
              ); ?>/assets/icon/facebook.svg" alt="Mobile menu"
            /></a>
          </li>
          <li class="header_social_sentence">
            <a href="#" class="header_social_svg"
              ><img src="<?php bloginfo(
                "template_url"
              ); ?>/assets/icon/twitter.svg" alt="Mobile menu"
            /></a>
          </li>
          <li class="header_social_sentence">
            <a href="#" class="header_social_links"
              ><span class="header_social_link_svg"
                ><img src="<?php bloginfo(
                  "template_url"
                ); ?>/assets/icon/dark-adress.svg" alt="Mobile menu" /></span
              >333 N Washington Ave #300, Minneapolis, MN 55401</a
            >
          </li>
        </ul>
      </div>
      <div class="container">
        <ul class="header_menu">
          <li class="header_sentence">
            <a href="./index.html" class="header_logo">
              <img
                src="<?php bloginfo("template_url"); ?>/assets/img/logo.png"
                alt="National Reatity Guild Logo"
                class="img"
              />
            </a>
          </li>
          <li><a class="header_desktop" href="<?php print_r(
            get_page_link(8)
          ); ?>">HOME</a></li>
          <li><a class="header_desktop" href="<?php print_r(
            get_page_link(12)
          ); ?>">BENEFITS</a></li>
          <li>
            <a class="header_desktop" href="<?php print_r(
              get_page_link(24)
            ); ?>">SALES GROWTH</a>
          </li>
          <li><a class="header_desktop" href="<?php print_r(
            get_page_link(16)
          ); ?>">SUPPORT</a></li>
          <li>
            <a class="header_desktop" href="<?php print_r(
              get_page_link(18)
            ); ?>">LOCATIONS</a>
          </li>
          <li><a class="header_desktop" href="<?php print_r(
            get_page_link(20)
          ); ?>">GET STARTED</a></li>
          <li><a class="header_desktop" href="<?php print_r(
            get_page_link(22)
          ); ?>">LEARN MORE</a></li>
          <li class="header_mobile_menu" data-open>
            <span class="header_svg"
              ><img
                src="<?php bloginfo("template_url"); ?>/assets/icon/list.svg"
                alt="Mobile menu"
                class="header_svg img"
            /></span>
          </li>
        </ul>
      </div>
      <script type="text/javascript">(() => {
  const refs = {
    openModalBtn: document.querySelector("[data-open]"),
    closeModalBtn: document.querySelector("[data-close]"),
    modal: document.querySelector("[data-modal-menu]"),
    bodyOverFlowHidden: document.querySelector("[data-body-hidden]"),
  };
  refs.openModalBtn.addEventListener("click", toggleModal);
  refs.closeModalBtn.addEventListener("click", toggleModal);
  function toggleModal() {
    refs.modal.classList.toggle("is-open");
    refs.bodyOverFlowHidden.classList.toggle("is-hidden");
  }
})();</script>
    </header>