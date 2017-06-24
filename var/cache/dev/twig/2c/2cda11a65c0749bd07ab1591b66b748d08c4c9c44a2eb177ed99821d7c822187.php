<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_a51b5cf6b8f6a60aea96d709e1ddd8a8cd994dc02a6b1cba8cf0ed36ee1bcc72 extends Twig_Template
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
        $__internal_98d5efaee7ab57a93f9b4f5a79ea229a89565df43dd93878e45455344fbd3b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98d5efaee7ab57a93f9b4f5a79ea229a89565df43dd93878e45455344fbd3b6a->enter($__internal_98d5efaee7ab57a93f9b4f5a79ea229a89565df43dd93878e45455344fbd3b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_f0a1db3efafc67aa2a25554ffa160c975fac6b5ec414d0c6f8a83383cdcf0fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a1db3efafc67aa2a25554ffa160c975fac6b5ec414d0c6f8a83383cdcf0fe8->enter($__internal_f0a1db3efafc67aa2a25554ffa160c975fac6b5ec414d0c6f8a83383cdcf0fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_98d5efaee7ab57a93f9b4f5a79ea229a89565df43dd93878e45455344fbd3b6a->leave($__internal_98d5efaee7ab57a93f9b4f5a79ea229a89565df43dd93878e45455344fbd3b6a_prof);

        
        $__internal_f0a1db3efafc67aa2a25554ffa160c975fac6b5ec414d0c6f8a83383cdcf0fe8->leave($__internal_f0a1db3efafc67aa2a25554ffa160c975fac6b5ec414d0c6f8a83383cdcf0fe8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
