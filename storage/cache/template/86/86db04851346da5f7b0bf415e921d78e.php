<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* adminoc/view/template/marketing/affiliate_list.twig */
class __TwigTemplate_161afe55a48ca78eb36fbfc88bbb1cba extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<form id=\"form-affiliate\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#list\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"";
        // line 7
        yield ($context["sort_name"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "name")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_name"] ?? null);
        yield "</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"";
        // line 8
        yield ($context["sort_tracking"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "ca.tracking")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_tracking"] ?? null);
        yield "</a></th>
          <th class=\"text-end\"><a href=\"";
        // line 9
        yield ($context["sort_commission"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "ca.commission")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_commission"] ?? null);
        yield "</a></th>
          <th class=\"text-end\"><a href=\"";
        // line 10
        yield ($context["sort_balance"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "ca.balance")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_balance"] ?? null);
        yield "</a></th>
          <th class=\"text-center\"><a href=\"";
        // line 11
        yield ($context["sort_status"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "ca.status")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_status"] ?? null);
        yield "</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"";
        // line 12
        yield ($context["sort_date_added"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "ca.date_added")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_date_added"] ?? null);
        yield "</a></th>
          <th class=\"text-end\">";
        // line 13
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 17
        if (($context["affiliates"] ?? null)) {
            // line 18
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["affiliates"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["affiliate"]) {
                // line 19
                yield "            <tr";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["affiliate"], "status", [], "any", false, false, false, 19)) {
                    yield " class=\"table-disabled\"";
                }
                yield ">
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["affiliate"], "customer_id", [], "any", false, false, false, 20);
                yield "\" class=\"form-check-input\"/></td>
              <td><a href=\"";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["affiliate"], "customer", [], "any", false, false, false, 21);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["affiliate"], "name", [], "any", false, false, false, 21);
                yield "</a></td>
              <td class=\"d-none d-lg-table-cell\">";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["affiliate"], "tracking", [], "any", false, false, false, 22);
                yield "</td>
              <td class=\"text-end\">";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["affiliate"], "commission", [], "any", false, false, false, 23);
                yield "</td>
              <td class=\"text-end d-none d-lg-table-cell\"><x-currency code=\"";
                // line 24
                yield ($context["currency"] ?? null);
                yield "\" amount=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["affiliate"], "balance", [], "any", false, false, false, 24);
                yield "\"></x-currency></td>
              <td class=\"text-center\">";
                // line 25
                if (CoreExtension::getAttribute($this->env, $this->source, $context["affiliate"], "status", [], "any", false, false, false, 25)) {
                    // line 26
                    yield "                  <span class=\"badge bg-success\">";
                    yield ($context["text_enabled"] ?? null);
                    yield "</span>
                ";
                } else {
                    // line 28
                    yield "                  <span class=\"badge bg-danger\">";
                    yield ($context["text_disabled"] ?? null);
                    yield "</span>
                ";
                }
                // line 29
                yield "</td>
              <td class=\"d-none d-lg-table-cell\">";
                // line 30
                yield CoreExtension::getAttribute($this->env, $this->source, $context["affiliate"], "date_added", [], "any", false, false, false, 30);
                yield "</td>
              <td class=\"text-end text-nowrap\"><a href=\"";
                // line 31
                yield CoreExtension::getAttribute($this->env, $this->source, $context["affiliate"], "edit", [], "any", false, false, false, 31);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['affiliate'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "        ";
        } else {
            // line 35
            yield "          <tr>
            <td class=\"text-center\" colspan=\"7\">";
            // line 36
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 39
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 43
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 44
        yield ($context["results"] ?? null);
        yield "</div>
  </div>
</form>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "adminoc/view/template/marketing/affiliate_list.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  223 => 44,  219 => 43,  213 => 39,  207 => 36,  204 => 35,  201 => 34,  190 => 31,  186 => 30,  183 => 29,  177 => 28,  171 => 26,  169 => 25,  163 => 24,  159 => 23,  155 => 22,  149 => 21,  145 => 20,  138 => 19,  133 => 18,  131 => 17,  124 => 13,  112 => 12,  100 => 11,  88 => 10,  76 => 9,  64 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-affiliate\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#list\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"{{ sort_name }}\"{% if sort == 'name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_name }}</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"{{ sort_tracking }}\"{% if sort == 'ca.tracking' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_tracking }}</a></th>
          <th class=\"text-end\"><a href=\"{{ sort_commission }}\"{% if sort == 'ca.commission' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_commission }}</a></th>
          <th class=\"text-end\"><a href=\"{{ sort_balance }}\"{% if sort == 'ca.balance' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_balance }}</a></th>
          <th class=\"text-center\"><a href=\"{{ sort_status }}\"{% if sort == 'ca.status' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_status }}</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"{{ sort_date_added }}\"{% if sort == 'ca.date_added' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_date_added }}</a></th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if affiliates %}
          {% for affiliate in affiliates %}
            <tr{% if not affiliate.status %} class=\"table-disabled\"{% endif %}>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ affiliate.customer_id }}\" class=\"form-check-input\"/></td>
              <td><a href=\"{{ affiliate.customer }}\">{{ affiliate.name }}</a></td>
              <td class=\"d-none d-lg-table-cell\">{{ affiliate.tracking }}</td>
              <td class=\"text-end\">{{ affiliate.commission }}</td>
              <td class=\"text-end d-none d-lg-table-cell\"><x-currency code=\"{{ currency }}\" amount=\"{{ affiliate.balance }}\"></x-currency></td>
              <td class=\"text-center\">{% if affiliate.status %}
                  <span class=\"badge bg-success\">{{ text_enabled }}</span>
                {% else %}
                  <span class=\"badge bg-danger\">{{ text_disabled }}</span>
                {% endif %}</td>
              <td class=\"d-none d-lg-table-cell\">{{ affiliate.date_added }}</td>
              <td class=\"text-end text-nowrap\"><a href=\"{{ affiliate.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"7\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>", "adminoc/view/template/marketing/affiliate_list.twig", "D:\\xampp\\htdocs\\opencart\\upload\\adminoc\\view\\template\\marketing\\affiliate_list.twig");
    }
}
