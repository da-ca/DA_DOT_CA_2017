<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c1ebe64a941bbad46921f3c30f264ba37358fadbbcf2a87e1251264e54f30801 extends Twig_Template
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
        $__internal_bbfbf72aa0d5e85df08779ace2edb463411976715b0904e2f68068f40ecfe911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbfbf72aa0d5e85df08779ace2edb463411976715b0904e2f68068f40ecfe911->enter($__internal_bbfbf72aa0d5e85df08779ace2edb463411976715b0904e2f68068f40ecfe911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f9f0bbd6fe0895e2c04528d83ae4d0447917922208e5ee871085a96419329604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f0bbd6fe0895e2c04528d83ae4d0447917922208e5ee871085a96419329604->enter($__internal_f9f0bbd6fe0895e2c04528d83ae4d0447917922208e5ee871085a96419329604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_bbfbf72aa0d5e85df08779ace2edb463411976715b0904e2f68068f40ecfe911->leave($__internal_bbfbf72aa0d5e85df08779ace2edb463411976715b0904e2f68068f40ecfe911_prof);

        
        $__internal_f9f0bbd6fe0895e2c04528d83ae4d0447917922208e5ee871085a96419329604->leave($__internal_f9f0bbd6fe0895e2c04528d83ae4d0447917922208e5ee871085a96419329604_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
