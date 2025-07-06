<?php

use Latte\Runtime as LR;

/** source: @footer.latte */
final class Template_fde1138760 extends Latte\Runtime\Template
{
	public const Source = '@footer.latte';


	public function main(array $ʟ_args): void
	{
		echo '<div style="position: fixed; bottom: 10px; right: 20px; z-index: 9999;"
     class="bg-light border shadow-sm rounded px-3 py-2 small text-muted">
  <a id="abuse-link" href="#" target="_blank" class="text-danger text-decoration-none fw-bold">
    Verificando IP...
  </a>
</div>

<script>
  fetch(\'https://api.ipify.org?format=json\')
    .then(res => res.json())
    .then(data => {
      const ip = data.ip;
      const link = document.querySelector(\'#abuse-link\');
      link.href = \'https://www.abuseipdb.com/check/\' + ip;
      link.textContent = \'Verificar IP: \' + ip;
    });
</script>
<div style="position: fixed; bottom: 10px; right: 20px; z-index: 9999;"
     class="bg-light border shadow-sm rounded px-3 py-2 small text-muted">
  Suspeita? Verifique: 
  <a href="https://www.abuseipdb.com/check/192.168.0.1" 
     target="_blank" 
     class="text-decoration-none text-danger fw-bold">
    AbuseIPDB
  </a>
</div>
';
	}
}
