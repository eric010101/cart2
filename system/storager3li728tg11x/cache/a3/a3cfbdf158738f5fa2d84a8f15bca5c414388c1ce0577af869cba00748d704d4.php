<?php

/* pav_celo/template/common/home.twig */
class __TwigTemplate_933931f3dad24456e882be6b8a3494d3b77413a97eb5f6041ee1f8d7fb3b30d5 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
";
        // line 2
        if (preg_match("{pa-element-container}", (isset($context["content_top"]) ? $context["content_top"] : null))) {
            // line 3
            echo "<div id=\"common-home\">
";
        } else {
            // line 5
            echo "<div id=\"common-home\" class=\"container\">    
";
        }
        // line 6
        echo "    

  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "
  
    <div id=\"content\" class=\"";
        // line 18
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">  
     ";
        // line 19
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
        
    ";
        // line 21
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 22
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 24
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "pav_celo/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  78 => 22,  74 => 21,  69 => 19,  65 => 18,  61 => 16,  58 => 15,  55 => 14,  52 => 13,  49 => 12,  46 => 11,  43 => 10,  41 => 9,  37 => 8,  33 => 6,  29 => 5,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {% if content_top matches '{pa-element-container}'  %}*/
/* <div id="common-home">*/
/* {% else %}*/
/* <div id="common-home" class="container">    */
/* {% endif %}    */
/* */
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/* */
/*   */
/*     <div id="content" class="{{ class }}">  */
/*      {{ content_top }}*/
/*         */
/*     {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
