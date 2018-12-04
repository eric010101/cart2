<?php

/* pav_celo/template/extension/module/carousel.twig */
class __TwigTemplate_49b4b6b49c905349a006efd4ecd6990d156b2c6c4cd2f93f37daff8d7d71af4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"swiper-viewport\">
  <div id=\"carousel";
        // line 2
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"swiper-container\">
    <div class=\"swiper-wrapper\">";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 4
            echo "      <div class=\"swiper-slide text-center\">";
            if ($this->getAttribute($context["banner"], "link", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                echo "<img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" />";
            }
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>
  </div>
  <div class=\"swiper-pagination carousel";
        // line 7
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\"></div>
  <div class=\"swiper-pager \">
    <div class=\"swiper-button-next\" id=\"carousel-next\"></div>
    <div class=\"swiper-button-prev\" id=\"carousel-prev\"></div>
  </div>
</div>
<script><!--
\$('#carousel";
        // line 14
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 6,
\tpagination: '.carousel";
        // line 17
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "',
\tpaginationClickable: true,
\tnextButton: '#carousel-next',
  prevButton: '#carousel-prev',
\tautoplay: 2500,
\tloop: true,
  spaceBetween: 0,
  breakpoints: {
            767: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 4,
            }, 
        }
});
--></script>";
    }

    public function getTemplateName()
    {
        return "pav_celo/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  67 => 14,  57 => 7,  53 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="swiper-viewport">*/
/*   <div id="carousel{{ module }}" class="swiper-container">*/
/*     <div class="swiper-wrapper">{% for banner in banners %}*/
/*       <div class="swiper-slide text-center">{% if banner.link %}<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>{% else %}<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />{% endif %}</div>*/
/*       {% endfor %}</div>*/
/*   </div>*/
/*   <div class="swiper-pagination carousel{{ module }}"></div>*/
/*   <div class="swiper-pager ">*/
/*     <div class="swiper-button-next" id="carousel-next"></div>*/
/*     <div class="swiper-button-prev" id="carousel-prev"></div>*/
/*   </div>*/
/* </div>*/
/* <script><!--*/
/* $('#carousel{{ module }}').swiper({*/
/* 	mode: 'horizontal',*/
/* 	slidesPerView: 6,*/
/* 	pagination: '.carousel{{ module }}',*/
/* 	paginationClickable: true,*/
/* 	nextButton: '#carousel-next',*/
/*   prevButton: '#carousel-prev',*/
/* 	autoplay: 2500,*/
/* 	loop: true,*/
/*   spaceBetween: 0,*/
/*   breakpoints: {*/
/*             767: {*/
/*                 slidesPerView: 2,*/
/*             },*/
/*             991: {*/
/*                 slidesPerView: 4,*/
/*             }, */
/*         }*/
/* });*/
/* --></script>*/
