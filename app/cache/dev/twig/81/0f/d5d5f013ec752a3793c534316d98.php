<?php

/* FilmothequeBundle:Default:index.html.twig */
class __TwigTemplate_810fd5d5f013ec752a3793c534316d98 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "FilmothequeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,);
    }
}
