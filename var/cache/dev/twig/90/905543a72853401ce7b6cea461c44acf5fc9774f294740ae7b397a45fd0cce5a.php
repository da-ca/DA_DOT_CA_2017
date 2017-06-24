<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_8d9ae13f8dc170bf2f38be414c2c3509acf043be441f10e4b3c4220525b5934e extends Twig_Template
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
        $__internal_7f52d5bd6d7c7cce222ab16742a2e197d891e36127e9822bf5f3e1f65dd094c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f52d5bd6d7c7cce222ab16742a2e197d891e36127e9822bf5f3e1f65dd094c6->enter($__internal_7f52d5bd6d7c7cce222ab16742a2e197d891e36127e9822bf5f3e1f65dd094c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_ca4998d0357e62d33411bf7fa1074cade88ef1e58d41894115c6ef55e4886229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4998d0357e62d33411bf7fa1074cade88ef1e58d41894115c6ef55e4886229->enter($__internal_ca4998d0357e62d33411bf7fa1074cade88ef1e58d41894115c6ef55e4886229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_7f52d5bd6d7c7cce222ab16742a2e197d891e36127e9822bf5f3e1f65dd094c6->leave($__internal_7f52d5bd6d7c7cce222ab16742a2e197d891e36127e9822bf5f3e1f65dd094c6_prof);

        
        $__internal_ca4998d0357e62d33411bf7fa1074cade88ef1e58d41894115c6ef55e4886229->leave($__internal_ca4998d0357e62d33411bf7fa1074cade88ef1e58d41894115c6ef55e4886229_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
