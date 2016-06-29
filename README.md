# Elementor Naked Theme for Wordpress

Este é um template extremamente simples e livre de qualquer formatação para ser usado com o plugin Elementor (http://www.elementor.com) para a criação de Landing Pages.

Atualmente temos 2 modelos de página:

- Modelo Padrão: Pode ser usado tanto como boxed ou full width.
- Modelo Full Width Background: Pode ser usado tanto boxed ou full width mas possui uma imagem de fundo que você deve especificar.

Este template pode ser estilizado de acordo com suas necessidades. Se você quiser envie um pull request para nós ;)

## Plugins necessários

- https://wordpress.org/plugins/advanced-custom-fields/

### Automação de Deploy

Este template já vem com o capistrano (http://capistranorb.com/) pré configurado.

Você deve renomear os seguintes arquivos:

 - config/deploy-sample.rb              > config/deploy.rb
 - config/deploy/staging-sample.rb      > config/deploy/staging.rb
 - config/deploy/production-sample.rb   > config/deploy/production.rb

Personalização das variáveis:

arquivo config/deploy.rb:

Configure o caminho da sua pasta themes
set :deploy_to, '/var/www/html/wordpress/wp-content/themes'
