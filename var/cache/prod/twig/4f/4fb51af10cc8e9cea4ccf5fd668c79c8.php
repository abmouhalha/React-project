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

/* question/show.html.twig */
class __TwigTemplate_f79b03387b0b622fe01e64a536881b69 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "question/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Question: ";
        echo twig_escape_filter($this->env, ($context["question"] ?? null), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12\">
            <h2 class=\"my-4\">Question:</h2>
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container-show p-4\">
                    <div class=\"row\">
                        <div class=\"col-2 text-center\">
                            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tisha.png"), "html", null, true);
        echo "\" width=\"100\" height=\"100\"  alt=\"Tisha avatar\">
                        </div>
                        <div class=\"col\">
                            <h1 class=\"q-title-show\">";
        // line 17
        echo twig_escape_filter($this->env, ($context["question"] ?? null), "html", null, true);
        echo "</h1>
                            <div class=\"q-display p-3\">
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"d-inline\">";
        // line 20
        echo ($context["questionText"] ?? null);
        echo "</p>
                                <p class=\"pt-4\"><strong>--Tisha</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"d-flex justify-content-between my-4\">
        <h2 class=\"\">Answers <span style=\"font-size:1.2rem;\">(";
        // line 31
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["answers"] ?? null)), "html", null, true);
        echo ")</span></h2>
        <button class=\"btn btn-sm btn-secondary\">Submit an Answer</button>
    </div>



    <ul class=\"list-unstyled\">
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["answers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 39
            echo "            <li class=\"mb-4\">
                <div class=\"d-flex justify-content-center\">
                    <div class=\"mr-2 pt-2\">
                        <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tisha.png"), "html", null, true);
            echo "\" width=\"50\" height=\"50\" alt=\"Tisha avatar\">
                    </div>
                    <div class=\"mr-3 pt-2\">
                        ";
            // line 45
            echo $this->extensions['Knp\Bundle\MarkdownBundle\Twig\Extension\MarkdownTwigExtension']->markdown($context["answer"]);
            echo "
                        <p>-- Mallory</p>
                    </div>
                    <div class=\"vote-arrows flex-fill pt-2 js-vote-arrows\" style=\"min-width: 90px;\">
                        <a class=\"vote-up\" href=\"#\" data-direction=\"up\"><i class=\"far fa-arrow-alt-circle-up\"></i></a>
                        <a class=\"vote-down\" href=\"#\" data-direction=\"down\"><i class=\"far fa-arrow-alt-circle-down\"></i></a>
                        <span>+ <span class=\"js-vote-total\">6</span></span>
                    </div>
                </div>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "question/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 56,  120 => 45,  114 => 42,  109 => 39,  105 => 38,  95 => 31,  81 => 20,  75 => 17,  69 => 14,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "question/show.html.twig", "/home/mozerhoun/Documents/start1/templates/question/show.html.twig");
    }
}
