<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a62c5790e30c31b0613aadd6a316207f26ef1fd0e418f6dbe615daa018becc5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a82db7da8545d07014bc7653f0ba8e1eac7bbaf0d2a17a82408e43db231be79d = $this->env->getExtension("native_profiler");
        $__internal_a82db7da8545d07014bc7653f0ba8e1eac7bbaf0d2a17a82408e43db231be79d->enter($__internal_a82db7da8545d07014bc7653f0ba8e1eac7bbaf0d2a17a82408e43db231be79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a82db7da8545d07014bc7653f0ba8e1eac7bbaf0d2a17a82408e43db231be79d->leave($__internal_a82db7da8545d07014bc7653f0ba8e1eac7bbaf0d2a17a82408e43db231be79d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_013ef1a023c38ae43d50ddf45a5fdfa6f788f6fb69a4c332ed0ae181b9db7642 = $this->env->getExtension("native_profiler");
        $__internal_013ef1a023c38ae43d50ddf45a5fdfa6f788f6fb69a4c332ed0ae181b9db7642->enter($__internal_013ef1a023c38ae43d50ddf45a5fdfa6f788f6fb69a4c332ed0ae181b9db7642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_013ef1a023c38ae43d50ddf45a5fdfa6f788f6fb69a4c332ed0ae181b9db7642->leave($__internal_013ef1a023c38ae43d50ddf45a5fdfa6f788f6fb69a4c332ed0ae181b9db7642_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_27d048acf917895113cacb9c0c17955d2eed5ad631fb06bf05c20eb6c2bb2436 = $this->env->getExtension("native_profiler");
        $__internal_27d048acf917895113cacb9c0c17955d2eed5ad631fb06bf05c20eb6c2bb2436->enter($__internal_27d048acf917895113cacb9c0c17955d2eed5ad631fb06bf05c20eb6c2bb2436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_27d048acf917895113cacb9c0c17955d2eed5ad631fb06bf05c20eb6c2bb2436->leave($__internal_27d048acf917895113cacb9c0c17955d2eed5ad631fb06bf05c20eb6c2bb2436_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec23ae5b481295e773313d9db5ce94418ae8ad8ff303fa66799f1fde2e62d6dd = $this->env->getExtension("native_profiler");
        $__internal_ec23ae5b481295e773313d9db5ce94418ae8ad8ff303fa66799f1fde2e62d6dd->enter($__internal_ec23ae5b481295e773313d9db5ce94418ae8ad8ff303fa66799f1fde2e62d6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ec23ae5b481295e773313d9db5ce94418ae8ad8ff303fa66799f1fde2e62d6dd->leave($__internal_ec23ae5b481295e773313d9db5ce94418ae8ad8ff303fa66799f1fde2e62d6dd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
