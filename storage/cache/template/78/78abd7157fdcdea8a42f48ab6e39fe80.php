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

/* adminoc/view/template/marketing/affiliate.twig */
class __TwigTemplate_17e93e057fe929d45471518b81db6b39 extends Template
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
        yield ($context["header"] ?? null);
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_filter"] ?? null);
        yield "\" onclick=\"\$('#filter-affiliate').toggleClass('d-none');\" class=\"btn btn-light d-md-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"button\" id=\"button-calculate\" data-bs-toggle=\"tooltip\" title=\"";
        // line 8
        yield ($context["button_calculate"] ?? null);
        yield "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-sync\"></i></button>
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-list-check\"></i> ";
        // line 10
        yield ($context["button_action"] ?? null);
        yield " <i class=\"fa-solid fa-caret-down fa-fw\"></i></button>
          <ul class=\"dropdown-menu\">
            <li><button type=\"submit\" form=\"form-affiliate\" formaction=\"";
        // line 12
        yield ($context["csv"] ?? null);
        yield "\" class=\"dropdown-item\"><i class=\"fa-solid fa-file-csv\"></i> ";
        yield ($context["text_csv"] ?? null);
        yield "</button></li>
            <li><button type=\"submit\" form=\"form-affiliate\" formaction=\"";
        // line 13
        yield ($context["complete"] ?? null);
        yield "\" class=\"dropdown-item\"><i class=\"fa-solid fa-credit-card\"></i> ";
        yield ($context["text_complete"] ?? null);
        yield "</button></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><button type=\"submit\" form=\"form-affiliate\" formaction=\"";
        // line 15
        yield ($context["enable"] ?? null);
        yield "\" class=\"dropdown-item\"><i class=\"fa-solid fa-toggle-on text-success\"></i> ";
        yield ($context["text_enable"] ?? null);
        yield "</button></li>
            <li><button type=\"submit\" form=\"form-affiliate\" formaction=\"";
        // line 16
        yield ($context["disable"] ?? null);
        yield "\" class=\"dropdown-item\"><i class=\"fa-solid fa-toggle-off text-danger\"></i> ";
        yield ($context["text_disable"] ?? null);
        yield "</button></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><button type=\"submit\" form=\"form-affiliate\" formaction=\"";
        // line 18
        yield ($context["delete"] ?? null);
        yield "\" onclick=\"return confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "');\" class=\"dropdown-item\"><i class=\"fa-regular fa-trash-can text-danger\"></i> ";
        yield ($context["text_delete"] ?? null);
        yield "</button></li>
          </ul>
        </div>
      </div>
      <h1>";
        // line 22
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 25
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 25);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 25);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-affiliate\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 34
        yield ($context["text_filter"] ?? null);
        yield "</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label class=\"form-label\">";
        // line 38
        yield ($context["entry_customer"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_customer\" value=\"";
        yield ($context["filter_customer"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_customer"] ?? null);
        yield "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-tracking\" class=\"form-label\">";
        // line 42
        yield ($context["entry_tracking"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_tracking\" value=\"";
        yield ($context["filter_tracking"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_tracking"] ?? null);
        yield "\" id=\"input-tracking\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-payment-method\" class=\"form-label\">";
        // line 45
        yield ($context["entry_payment_method"] ?? null);
        yield "</label> <select name=\"filter_payment_method\" id=\"input-payment-method\" class=\"form-select\">
                  <option value=\"\"></option>
                  ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["payment_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
            // line 48
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["payment_method"], "value", [], "any", false, false, false, 48);
            yield "\"";
            if ((($context["filter_payment_method"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["payment_method"], "value", [], "any", false, false, false, 48))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["payment_method"], "text", [], "any", false, false, false, 48);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['payment_method'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-commission\" class=\"form-label\">";
        // line 53
        yield ($context["entry_commission"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_commission\" value=\"";
        yield ($context["filter_commission"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_commission"] ?? null);
        yield "\" id=\"input-commission\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-from\" class=\"form-label\">";
        // line 56
        yield ($context["entry_date_from"] ?? null);
        yield "</label>
                <input type=\"date\" name=\"filter_date_from\" value=\"";
        // line 57
        yield ($context["filter_date_from"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_from"] ?? null);
        yield "\" id=\"input-date-from\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-to\" class=\"form-label\">";
        // line 60
        yield ($context["entry_date_to"] ?? null);
        yield "</label>
                <input type=\"date\" name=\"filter_date_to\" value=\"";
        // line 61
        yield ($context["filter_date_to"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_to"] ?? null);
        yield "\" id=\"input-date-to\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">";
        // line 64
        yield ($context["entry_status"] ?? null);
        yield "</label> <select name=\"filter_status\" id=\"input-status\" class=\"form-select\">
                  <option value=\"\"></option>
                  <option value=\"1\"";
        // line 66
        if ((($context["filter_status"] ?? null) == "1")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                  <option value=\"0\"";
        // line 67
        if ((($context["filter_status"] ?? null) == "0")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_disabled"] ?? null);
        yield "</option>
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-limit\" class=\"form-label\">";
        // line 71
        yield ($context["entry_limit"] ?? null);
        yield "</label>
                <select name=\"limit\" id=\"input-limit\" class=\"form-select\">
                  ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 74
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 74);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 74) == ($context["limit"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 74);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['limits'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "                </select>
              </div>
              <div class=\"text-end\">
                <button type=\"submit\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 79
        yield ($context["button_filter"] ?? null);
        yield "</button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"";
        // line 80
        yield ($context["button_reset"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 88
        yield ($context["text_list"] ?? null);
        yield "</div>
          <div id=\"list\" class=\"card-body\">";
        // line 89
        yield ($context["list"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#list').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#list').load(this.href);
});

\$('#form-filter').on('submit', function(e) {
    e.preventDefault();

    let url = \$(this).serialize();

    window.history.pushState({}, null, 'index.php?route=marketing/affiliate&user_token=";
        // line 107
        yield ($context["user_token"] ?? null);
        yield "&' + url);

    \$('#list').load('index.php?route=marketing/affiliate.list&user_token=";
        // line 109
        yield ($context["user_token"] ?? null);
        yield "&' + url);
});

\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 115
        yield ($context["user_token"] ?? null);
        yield "&filter_affiliate=1&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-customer').val(decodeHTMLEntities(item['label']));
    }
});

\$('#button-calculate').on('click', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=marketing/affiliate.calculate&user_token=";
        // line 138
        yield ($context["user_token"] ?? null);
        yield "',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                url = '';

                var filter_customer = \$('#input-customer').val();

                if (filter_customer) {
                    url += '&filter_customer=' + encodeURIComponent(filter_customer);
                }

                var filter_tracking = \$('#input-tracking').val();

                if (filter_tracking) {
                    url += '&filter_tracking=' + encodeURIComponent(filter_tracking);
                }

                var filter_payment_method = \$('#input-payment-method').val();

                if (filter_payment_method) {
                    url += '&filter_payment_method=' + filter_payment_method;
                }

                var filter_commission = \$('#input-commission').val();

                if (filter_commission) {
                    url += '&filter_commission=' + filter_commission;
                }

                var filter_date_from = \$('#input-date-from').val();

                if (filter_date_from) {
                    url += '&filter_date_from=' + encodeURIComponent(filter_date_from);
                }

                var filter_date_to = \$('#input-date-to').val();

                if (filter_date_to) {
                    url += '&filter_date_to=' + encodeURIComponent(filter_date_to);
                }

                var filter_status = \$('#input-status').val();

                if (filter_status !== '') {
                    url += '&filter_status=' + filter_status;
                }

                var limit = \$('#input-limit').val();

                if (limit) {
                    url += '&limit=' + limit;
                }

                \$('#list').load('index.php?route=marketing/affiliate.list&user_token=";
        // line 206
        yield ($context["user_token"] ?? null);
        yield "' + url);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 215
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "adminoc/view/template/marketing/affiliate.twig";
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
        return array (  444 => 215,  432 => 206,  361 => 138,  335 => 115,  326 => 109,  321 => 107,  300 => 89,  296 => 88,  285 => 80,  281 => 79,  276 => 76,  261 => 74,  257 => 73,  252 => 71,  241 => 67,  233 => 66,  228 => 64,  220 => 61,  216 => 60,  208 => 57,  204 => 56,  194 => 53,  189 => 50,  174 => 48,  170 => 47,  165 => 45,  155 => 42,  144 => 38,  137 => 34,  128 => 27,  117 => 25,  113 => 24,  108 => 22,  97 => 18,  90 => 16,  84 => 15,  77 => 13,  71 => 12,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" onclick=\"\$('#filter-affiliate').toggleClass('d-none');\" class=\"btn btn-light d-md-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <a href=\"{{ add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"button\" id=\"button-calculate\" data-bs-toggle=\"tooltip\" title=\"{{ button_calculate }}\" class=\"btn btn-warning\"><i class=\"fa-solid fa-sync\"></i></button>
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-list-check\"></i> {{ button_action }} <i class=\"fa-solid fa-caret-down fa-fw\"></i></button>
          <ul class=\"dropdown-menu\">
            <li><button type=\"submit\" form=\"form-affiliate\" formaction=\"{{ csv }}\" class=\"dropdown-item\"><i class=\"fa-solid fa-file-csv\"></i> {{ text_csv }}</button></li>
            <li><button type=\"submit\" form=\"form-affiliate\" formaction=\"{{ complete }}\" class=\"dropdown-item\"><i class=\"fa-solid fa-credit-card\"></i> {{ text_complete }}</button></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><button type=\"submit\" form=\"form-affiliate\" formaction=\"{{ enable }}\" class=\"dropdown-item\"><i class=\"fa-solid fa-toggle-on text-success\"></i> {{ text_enable }}</button></li>
            <li><button type=\"submit\" form=\"form-affiliate\" formaction=\"{{ disable }}\" class=\"dropdown-item\"><i class=\"fa-solid fa-toggle-off text-danger\"></i> {{ text_disable }}</button></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><button type=\"submit\" form=\"form-affiliate\" formaction=\"{{ delete }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"dropdown-item\"><i class=\"fa-regular fa-trash-can text-danger\"></i> {{ text_delete }}</button></li>
          </ul>
        </div>
      </div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-affiliate\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> {{ text_filter }}</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label class=\"form-label\">{{ entry_customer }}</label> <input type=\"text\" name=\"filter_customer\" value=\"{{ filter_customer }}\" placeholder=\"{{ entry_customer }}\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-tracking\" class=\"form-label\">{{ entry_tracking }}</label> <input type=\"text\" name=\"filter_tracking\" value=\"{{ filter_tracking }}\" placeholder=\"{{ entry_tracking }}\" id=\"input-tracking\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-payment-method\" class=\"form-label\">{{ entry_payment_method }}</label> <select name=\"filter_payment_method\" id=\"input-payment-method\" class=\"form-select\">
                  <option value=\"\"></option>
                  {% for payment_method in payment_methods %}
                    <option value=\"{{ payment_method.value }}\"{% if filter_payment_method == payment_method.value %} selected{% endif %}>{{ payment_method.text }}</option>
                  {% endfor %}
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-commission\" class=\"form-label\">{{ entry_commission }}</label> <input type=\"text\" name=\"filter_commission\" value=\"{{ filter_commission }}\" placeholder=\"{{ entry_commission }}\" id=\"input-commission\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-from\" class=\"form-label\">{{ entry_date_from }}</label>
                <input type=\"date\" name=\"filter_date_from\" value=\"{{ filter_date_from }}\" placeholder=\"{{ entry_date_from }}\" id=\"input-date-from\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-to\" class=\"form-label\">{{ entry_date_to }}</label>
                <input type=\"date\" name=\"filter_date_to\" value=\"{{ filter_date_to }}\" placeholder=\"{{ entry_date_to }}\" id=\"input-date-to\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">{{ entry_status }}</label> <select name=\"filter_status\" id=\"input-status\" class=\"form-select\">
                  <option value=\"\"></option>
                  <option value=\"1\"{% if filter_status == '1' %} selected{% endif %}>{{ text_enabled }}</option>
                  <option value=\"0\"{% if filter_status == '0' %} selected{% endif %}>{{ text_disabled }}</option>
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-limit\" class=\"form-label\">{{ entry_limit }}</label>
                <select name=\"limit\" id=\"input-limit\" class=\"form-select\">
                  {% for limits in limits %}
                    <option value=\"{{ limits.value }}\"{% if limits.value == limit %} selected{% endif %}>{{ limits.text }}</option>
                  {% endfor %}
                </select>
              </div>
              <div class=\"text-end\">
                <button type=\"submit\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> {{ button_filter }}</button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"{{ button_reset }}\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> {{ text_list }}</div>
          <div id=\"list\" class=\"card-body\">{{ list }}</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#list').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#list').load(this.href);
});

\$('#form-filter').on('submit', function(e) {
    e.preventDefault();

    let url = \$(this).serialize();

    window.history.pushState({}, null, 'index.php?route=marketing/affiliate&user_token={{ user_token }}&' + url);

    \$('#list').load('index.php?route=marketing/affiliate.list&user_token={{ user_token }}&' + url);
});

\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token={{ user_token }}&filter_affiliate=1&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-customer').val(decodeHTMLEntities(item['label']));
    }
});

\$('#button-calculate').on('click', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=marketing/affiliate.calculate&user_token={{ user_token }}',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                url = '';

                var filter_customer = \$('#input-customer').val();

                if (filter_customer) {
                    url += '&filter_customer=' + encodeURIComponent(filter_customer);
                }

                var filter_tracking = \$('#input-tracking').val();

                if (filter_tracking) {
                    url += '&filter_tracking=' + encodeURIComponent(filter_tracking);
                }

                var filter_payment_method = \$('#input-payment-method').val();

                if (filter_payment_method) {
                    url += '&filter_payment_method=' + filter_payment_method;
                }

                var filter_commission = \$('#input-commission').val();

                if (filter_commission) {
                    url += '&filter_commission=' + filter_commission;
                }

                var filter_date_from = \$('#input-date-from').val();

                if (filter_date_from) {
                    url += '&filter_date_from=' + encodeURIComponent(filter_date_from);
                }

                var filter_date_to = \$('#input-date-to').val();

                if (filter_date_to) {
                    url += '&filter_date_to=' + encodeURIComponent(filter_date_to);
                }

                var filter_status = \$('#input-status').val();

                if (filter_status !== '') {
                    url += '&filter_status=' + filter_status;
                }

                var limit = \$('#input-limit').val();

                if (limit) {
                    url += '&limit=' + limit;
                }

                \$('#list').load('index.php?route=marketing/affiliate.list&user_token={{ user_token }}' + url);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}
", "adminoc/view/template/marketing/affiliate.twig", "D:\\xampp\\htdocs\\opencart\\upload\\adminoc\\view\\template\\marketing\\affiliate.twig");
    }
}
