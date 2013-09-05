<?php

/* MMMBlogBundle:Blog:byebye.html.twig */
class __TwigTemplate_d91a015e69767a655a8fe3ae8f9cb1b3 extends Twig_Template
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
        // line 2
        echo " 
<!DOCTYPE html>
<html>
  <head>
    <title>Au revoir avec MMM...  !</title>
  </head>
  <body>
    <h1>ByeBye ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>
 
    <p>
    
    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("mmmblog_voir", array("id" => 5));
        echo "\">Lien vers l'article d'id ";
        echo 5;
        echo "</a>
    
    </p>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "MMMBlogBundle:Blog:byebye.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 13,  28 => 9,  19 => 2,);
    }
}
