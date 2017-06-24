<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7998612025deedabff986da4693aae0c2d98dc2bccab7aabb5a79bb6805c18da extends Twig_Template
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
        $__internal_e62566d0e36330c778903b6db1ade08b221318940f5c56eed12559f0cc3a237d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62566d0e36330c778903b6db1ade08b221318940f5c56eed12559f0cc3a237d->enter($__internal_e62566d0e36330c778903b6db1ade08b221318940f5c56eed12559f0cc3a237d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_388d359cc3a0257939bd3cfd40330e546b1fc4c47fbea5732be616fc8ed6b121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388d359cc3a0257939bd3cfd40330e546b1fc4c47fbea5732be616fc8ed6b121->enter($__internal_388d359cc3a0257939bd3cfd40330e546b1fc4c47fbea5732be616fc8ed6b121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e62566d0e36330c778903b6db1ade08b221318940f5c56eed12559f0cc3a237d->leave($__internal_e62566d0e36330c778903b6db1ade08b221318940f5c56eed12559f0cc3a237d_prof);

        
        $__internal_388d359cc3a0257939bd3cfd40330e546b1fc4c47fbea5732be616fc8ed6b121->leave($__internal_388d359cc3a0257939bd3cfd40330e546b1fc4c47fbea5732be616fc8ed6b121_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
