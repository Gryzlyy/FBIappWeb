<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* security/login.html.twig */
class __TwigTemplate_259c4a2599d721f7670671fe8531035a44f441a52a5b3b2610c4b4963485bb59 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Log in!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("_header.html.twig", "security/login.html.twig", 7)->display($context);
        // line 8
        echo "
<form method=\"post\">
    ";
        // line 10
        if (($context["error"] ?? null)) {
            // line 11
            echo "        <div class=\"alert alert-danger mt-4\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 11), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14)) {
            // line 15
            echo "        <div class=\"mb-3 mt-4\">
            You are logged in as ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "username", [], "any", false, false, false, 16), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 19
        echo "
    <h1 class=\"h3 mb-3 font-weight-normal mx-2 mt-4\">Please sign in</h1>
    <label for=\"inputEmail\" class=\"mx-5 mb-2\">Email</label>
    <input type=\"email\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control mx-5\" style=\"max-width: 40%\" required autofocus>
    <label for=\"inputPassword\" class=\"mx-5 mb-2\" style=\"margin-top: 1em\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control mx-5\" style=\"max-width: 40%\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >

    ";
        // line 34
        echo "        <div class=\"checkbox my-2 mx-5\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>


    <button class=\"btn btn-lg btn-primary mt-3 mx-5\" type=\"submit\">
        Sign in
    </button>

</form>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 34,  104 => 27,  96 => 22,  91 => 19,  83 => 16,  80 => 15,  78 => 14,  75 => 13,  69 => 11,  67 => 10,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/Users/paulfaguet/Desktop/FBI_APP/templates/security/login.html.twig");
    }
}
