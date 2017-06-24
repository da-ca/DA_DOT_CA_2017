<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ae271d8d769288281d6f2621c0bba418ef40c8734672045b3b7ddc8e6a649513 extends Twig_Template
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
        $__internal_099d7756c8d8422b9244081adde9d46701f7e0cd89cfc12a5a23da695c2fdb17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099d7756c8d8422b9244081adde9d46701f7e0cd89cfc12a5a23da695c2fdb17->enter($__internal_099d7756c8d8422b9244081adde9d46701f7e0cd89cfc12a5a23da695c2fdb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_9768a1ef3c43f30fbc360fd5c173fed1e2f0bf2e95ab44f25026ee90aad2e3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9768a1ef3c43f30fbc360fd5c173fed1e2f0bf2e95ab44f25026ee90aad2e3df->enter($__internal_9768a1ef3c43f30fbc360fd5c173fed1e2f0bf2e95ab44f25026ee90aad2e3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_099d7756c8d8422b9244081adde9d46701f7e0cd89cfc12a5a23da695c2fdb17->leave($__internal_099d7756c8d8422b9244081adde9d46701f7e0cd89cfc12a5a23da695c2fdb17_prof);

        
        $__internal_9768a1ef3c43f30fbc360fd5c173fed1e2f0bf2e95ab44f25026ee90aad2e3df->leave($__internal_9768a1ef3c43f30fbc360fd5c173fed1e2f0bf2e95ab44f25026ee90aad2e3df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
