# HPC Church - Tema WordPress

![Versão](https://img.shields.io/badge/versão-1.0.0-blue)
![WordPress](https://img.shields.io/badge/WordPress-5.0+-green)
![Licença](https://img.shields.io/badge/licença-GPL--2.0-orange)

Tema WordPress elegante e minimalista para igrejas, com design em preto e branco, integração WooCommerce e funcionalidades completas.

## 🎨 Preview

Design ultra-elegante em preto e branco com tipografia sofisticada (Cormorant Garamond + Montserrat).

## ✨ Funcionalidades

### 🎯 Core Features
- ✅ **Design Responsivo** - Mobile-first, funciona perfeitamente em todos os dispositivos
- ✅ **WordPress Customizer** - Personalize cores, logo e informações da igreja
- ✅ **Custom Post Type: Eventos** - Sistema completo de gestão de eventos
- ✅ **WooCommerce Ready** - Loja online integrada
- ✅ **4 Modais Funcionais** - Inscrição, Voluntário, Batismo, Pedido de Oração
- ✅ **AJAX Forms** - Envio de formulários sem recarregar página

### 📄 Templates Incluídos
- `index.php` - Home page com 7 seções completas
- `page.php` - Template genérico para páginas
- `single.php` - Posts individuais do blog
- `archive.php` - Listagem do blog com destaque para Pastor
- `page-sobre.php` - ⭐ Sobre a igreja (história, missão, valores, liderança)
- `page-contato.php` - ⭐ Contato completo (formulário, mapa, horários)
- `page-loja.php` - ⭐ Loja (produtos exemplo + integração WooCommerce)
- `page-comunidade.php` - Eventos, grupos e ações sociais
- `page-agenda.php` - Calendário interativo com inscrições
- `404.php` - Página de erro elegante
- `woocommerce.php` - Override da loja

### 🎨 Design System
- **Cores:** Preto (#000), Branco (#fff), Cinzas
- **Fontes:** Cormorant Garamond (títulos) + Montserrat (corpo)
- **Estilo:** Minimalista, elegante, sofisticado

## 📦 Instalação

### Método 1: Upload via WordPress (Recomendado)

1. **Baixe o tema:**
   - Clique em [**Download ZIP**](https://github.com/Soli-25/HPC-Church-WordPress-Theme/archive/refs/heads/main.zip)
   - OU clone: `git clone https://github.com/Soli-25/HPC-Church-WordPress-Theme.git`

2. **Empacote o tema** (se clonou via Git):
   ```bash
   cd HPC-Church-WordPress-Theme
   zip -r hpc-church-theme.zip . -x "*.git*" "*.DS_Store"
   ```

3. **Instale no WordPress:**
   - Acesse: `wp-admin` → `Aparência` → `Temas` → `Adicionar Novo`
   - Clique: `Fazer Upload do Tema`
   - Escolha: `hpc-church-theme.zip`
   - Clique: `Instalar Agora`
   - Clique: `Ativar`

### Método 2: Upload via FTP

1. Baixe e extraia o tema
2. Faça upload da pasta para: `/wp-content/themes/`
3. Ative no WordPress: `Aparência` → `Temas`

## 📚 IMPORTANTE: Tema Completo e Funcional

**✅ O tema está 100% COMPLETO e funciona imediatamente após instalação!**

### 🎉 O que funciona SEM configuração:

- ✅ **Menus automaticamente configurados** (Header + Footer + Mobile)
- ✅ **Página inicial completa** com 7 seções de conteúdo
- ✅ **6 páginas com conteúdo rico** (Sobre, Contato, Loja, Comunidade, Agenda, Blog)
- ✅ **4 modais funcionais** (Inscrição, Voluntário, Batismo, Oração)
- ✅ **Design elegante** preto e branco
- ✅ **Navegação responsiva** (funciona em celular, tablet, desktop)
- ✅ **Links padrão:** Início, Sobre, Blog, Comunidade, Agenda, Loja, Contato, Ofertas

### 📖 Guias Opcionais (para adicionar mais conteúdo):

👉 **[INSTALACAO-RAPIDA.md](INSTALACAO-RAPIDA.md)** - Guia rápido de instalação  
👉 **[PASSO-A-PASSO-CONFIGURAR-BLOG.md](PASSO-A-PASSO-CONFIGURAR-BLOG.md)** - 🎯 **COMECE AQUI!** Fazer posts aparecerem no blog  
👉 **[VIDEO-CONFIGURAR-BLOG.md](VIDEO-CONFIGURAR-BLOG.md)** - 📺 Vídeo em texto: Configurar blog (2 min)  
👉 **[SOLUCAO-BLOG-VAZIO.md](SOLUCAO-BLOG-VAZIO.md)** - 🔧 Solução detalhada: Blog vazio  
👉 **[GUIA-CATEGORIAS-NO-MENU.md](GUIA-CATEGORIAS-NO-MENU.md)** - ⭐ Criar blogs separados com categorias  
👉 **[GUIA-ADICIONAR-CONTEUDO-WORDPRESS.md](GUIA-ADICIONAR-CONTEUDO-WORDPRESS.md)** - Adicionar páginas, posts, eventos

**O site já está funcional! Esses guias são opcionais para expandir o conteúdo.**

## ⚙️ Configuração

### 1️⃣ Informações da Igreja

Vá em: `Aparência` → `Personalizar` → `Informações da Igreja`

Configure:
- Endereço
- Telefone
- E-mail
- Instagram

### 2️⃣ Menus de Navegação

Vá em: `Aparência` → `Menus`

Crie um menu com os itens:
- Início
- Sobre
- Blog
- Comunidade
- Agenda
- Loja
- Contato
- Ofertas

Atribua ao local: **Menu Principal**

### 3️⃣ Criar Páginas

Crie as seguintes páginas:

**Página: Comunidade**
- Modelo: `Comunidade`

**Página: Agenda**
- Modelo: `Agenda`

### 4️⃣ Configurar Permalinks

Vá em: `Configurações` → `Links Permanentes`
Selecione: **Nome do Post**

### 5️⃣ Definir Homepage

Vá em: `Configurações` → `Leitura`
- Página inicial: `Início` (ou deixe padrão)
- Página de posts: `Blog`

## 🔌 Plugins Recomendados

### Essenciais
- **WooCommerce** - Para a loja online
- **Contact Form 7** - Formulários adicionais
- **Yoast SEO** - Otimização para buscadores

### Opcionais
- **Wordfence Security** - Segurança
- **UpdraftPlus** - Backup automático
- **WP Super Cache** - Performance
- **Smush** - Otimização de imagens

## 📅 Custom Post Type: Eventos

### Criar um Novo Evento

1. Vá em: `Eventos` → `Adicionar Novo`
2. Preencha:
   - **Título:** Nome do evento
   - **Conteúdo:** Descrição detalhada
   - **Imagem Destacada:** Foto do evento
3. **Metadados do Evento:**
   - **Data:** YYYY-MM-DD
   - **Horário:** HH:MM
   - **Local:** Nome do local
   - **Tipo:** Culto, Grupo, Ação Social, Especial
4. Clique em **Publicar**

## 🛒 Configurar Loja (WooCommerce)

### Adicionar Produtos

1. Vá em: `Produtos` → `Adicionar Novo`
2. Configure:
   - Nome do produto
   - Descrição
   - Preço
   - Imagem
   - Categorias
3. Publique

### Produtos Sugeridos
- Livros do pastor
- Bíblias de estudo
- Camisetas
- Canecas
- Adesivos

## 💬 Sistema de Modais

O tema inclui 4 modais funcionais que podem ser acionados via JavaScript:

```javascript
// Abrir modal de inscrição
openModal('connectModal');

// Abrir modal de voluntariado
openModal('teamModal');

// Abrir modal de batismo
openModal('baptismModal');

// Abrir modal de oração
openModal('prayerModal');
```

Os formulários enviam dados via AJAX para o e-mail configurado.

## 📧 Configurar E-mails

Por padrão, os formulários enviam para `contato@hpcchurch.com`.

Para alterar, edite `functions.php` na função `hpc_church_submit_form()`.

### Configurar SMTP (Recomendado)

1. Instale: **WP Mail SMTP**
2. Configure com:
   - Gmail
   - Outlook
   - SendGrid
   - Mailgun

## 🎨 Personalização

### Alterar Cores

Edite `style.css` e busque por:
- `#000000` - Preto principal
- `#ffffff` - Branco
- `#fafafa` - Cinza claro

### Alterar Fontes

Edite `functions.php` na função `hpc_church_scripts()`:

```php
wp_enqueue_style( 'google-fonts', 
    'https://fonts.googleapis.com/css2?family=SuaFonte:wght@300;400;700&display=swap'
);
```

### Adicionar CSS Customizado

Use: `Aparência` → `Personalizar` → `CSS Adicional`

## 🌐 Estrutura de Arquivos

```
hpc-church-theme/
├── style.css              # Metadados + CSS principal
├── functions.php          # Funcionalidades PHP
├── header.php             # Cabeçalho e navegação
├── footer.php             # Rodapé
├── index.php              # Home page
├── page.php               # Páginas genéricas
├── single.php             # Posts do blog
├── archive.php            # Listagem do blog
├── 404.php                # Página de erro
├── page-comunidade.php    # Template Comunidade
├── page-agenda.php        # Template Agenda
├── woocommerce.php        # Override WooCommerce
├── screenshot.svg         # Preview do tema
├── assets/
│   └── js/
│       └── main.js        # JavaScript principal
└── template-parts/
    └── modals.php         # Modais funcionais
```

## 🆘 Problemas Comuns

### Tema não aparece na lista
**Solução:** Verifique se o `style.css` está na raiz do tema.

### Páginas mostram erro 404
**Solução:** Vá em `Configurações` → `Links Permanentes` → `Salvar`.

### Formulários não enviam
**Solução:** Instale o plugin **WP Mail SMTP** e configure.

### Imagens não aparecem
**Solução:** Regenere miniaturas com o plugin **Regenerate Thumbnails**.

## 📞 Suporte

- **Documentação WordPress:** https://wordpress.org/support/
- **Documentação WooCommerce:** https://woocommerce.com/documentation/
- **Issues:** https://github.com/Soli-25/HPC-Church-WordPress-Theme/issues

## 📝 Changelog

### Versão 3.0.0 (2025-01-29) - TODAS AS PÁGINAS ⭐
- ✨ **Página Sobre** - História, missão, valores, estatísticas, liderança
- ✨ **Página Contato** - Formulário funcional, mapa, horários, informações
- ✨ **Página Loja** - 6 produtos exemplo + integração WooCommerce automática
- ✅ Todas as páginas com conteúdo rico e design elegante
- ✅ Site 100% completo e funcional

### Versão 2.0.0 (2025-01-29) - MENUS AUTOMÁTICOS
- ✅ Menus hardcoded (Header + Footer + Mobile)
- ✅ Funcionam SEM configurar WordPress
- ✅ Fallback inteligente

### Versão 1.0.0 (2025-01-29) - LANÇAMENTO INICIAL
- ✨ Lançamento inicial
- ✅ Design completo em preto e branco
- ✅ Custom Post Type: Eventos
- ✅ 4 modais funcionais
- ✅ Integração WooCommerce
- ✅ Templates customizados
- ✅ WordPress Customizer
- ✅ Responsive design

## 📄 Licença

GPL-2.0 License - Livre para uso pessoal e comercial.

## 👨‍💻 Autor

**HPC Church Team**  
📧 contato@hpcchurch.com  
🌐 https://github.com/Soli-25

---

**Desenvolvido com ❤️ para a comunidade HPC Church em Marietta, Atlanta**

*"Conectando pessoas com Deus e umas com as outras"*
