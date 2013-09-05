<?php

/* MMMBlogBundle:Blog:index.html.twig */
class __TwigTemplate_da0db1c830aaa0e5dd6e63397fceddf0 extends Twig_Template
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
    <title>Bienvenue sur ma première page avec MMM...  !</title>
  </head>
  <body>
    <h1>Hello ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>
 
    <p>
      Le Hello World est un grand classique en programmation.<br/>
      Il signifie énormément, car cela veut dire que vous avez<br/>
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "MMMBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 9,  19 => 2,);
    }
}
