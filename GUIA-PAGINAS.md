# 📄 Guia Completo de Páginas - HPC Church Theme v3.0

## ✅ TODAS AS PÁGINAS JÁ ESTÃO CRIADAS COM CONTEÚDO!

O tema agora vem com **6 páginas completas** e prontas para uso. Cada página tem conteúdo rico, design elegante e funcionalidades específicas.

---

## 📋 PÁGINAS INCLUÍDAS

### 1️⃣ **Início (Home)** - `index.php`
**URL:** `/` ou `/home`

**Conteúdo incluído:**
- ✅ Hero Section com imagem da igreja
- ✅ Descubra a HPC Church (com badge e data)
- ✅ Descubra o Dream Team
- ✅ Batismos + Versículo Bíblico (Atos 2:38)
- ✅ Somos Melhores Juntos (Grupos de Conexão)
- ✅ Conecte-se Conosco
- ✅ Leia a Bíblia Conosco (Seção SOAP - fundo escuro)
- ✅ Envolva-se (3 cards: Conexão, Oração, Ofertas)
- ✅ Últimos posts do blog (se existirem)

**Como usar:**
- Já funciona automaticamente após ativar o tema
- Não precisa criar página no WordPress

---

### 2️⃣ **Sobre** - `page-sobre.php`
**URL:** `/sobre`

**Conteúdo incluído:**
- ✅ Hero com foto da igreja
- ✅ Nossa História (3 parágrafos completos)
- ✅ Estatísticas (500+ membros, 50+ grupos, 15+ ministérios, 10 anos)
- ✅ Nossa Missão (citação destacada)
- ✅ Nossos Valores (6 cards: Palavra, Oração, Amor, Comunidade, Excelência, Missões)
- ✅ Nossa Liderança (3 líderes com fotos e biografias)
- ✅ Call to Action (botão Conecte-se)

**Como usar:**
1. WordPress Admin → Páginas → Adicionar Nova
2. Título: **Sobre**
3. Template: **Sobre** (no lado direito, em "Atributos da Página")
4. Publicar

**Personalizar:**
- Edite o arquivo `page-sobre.php` para mudar textos, números, fotos
- As fotos dos líderes usam Unsplash (substitua pelas fotos reais)

---

### 3️⃣ **Contato** - `page-contato.php`
**URL:** `/contato`

**Conteúdo incluído:**
- ✅ Hero com imagem
- ✅ Horários de Reunião (Domingo 10h, 18h / Quarta 19:30h)
- ✅ Informações de Contato (endereço, telefone, email, redes sociais)
- ✅ Formulário de Contato FUNCIONAL (envia emails via AJAX)
- ✅ Mapa do Google Maps (integrado)

**Como usar:**
1. WordPress Admin → Páginas → Adicionar Nova
2. Título: **Contato**
3. Template: **Contato**
4. Publicar

**Formulário:**
- Formulário já funciona e envia emails
- Emails vão para o endereço configurado em: Configurações → Geral → E-mail de administração

**Mapa:**
- Endereço atual: 3379 Canton Rd, Marietta, GA 30066
- Para mudar: edite `page-contato.php` linha ~252 (URL do Google Maps)

---

### 4️⃣ **Loja** - `page-loja.php`
**URL:** `/loja`

**Conteúdo incluído:**
- ✅ Hero com imagem
- ✅ 6 produtos de exemplo (Bíblia, Livro, Camiseta, Devocional, Caneca, CD)
- ✅ Integração automática com WooCommerce
- ✅ Instruções de como instalar WooCommerce

**Como usar:**
1. WordPress Admin → Páginas → Adicionar Nova
2. Título: **Loja**
3. Template: **Loja**
4. Publicar

**Dois modos de funcionamento:**

#### Modo 1: Sem WooCommerce (Produtos de Exemplo)
- Mostra 6 produtos de exemplo com design bonito
- Botões mostram alerta pedindo para instalar WooCommerce
- Inclui instruções de instalação

#### Modo 2: Com WooCommerce (Loja Real)
- Instale o plugin WooCommerce (Plugins → Adicionar Novo)
- A página carrega automaticamente os produtos reais
- Carrinho de compras funcional
- Checkout completo

**Adicionar produtos reais:**
1. Instale e ative WooCommerce
2. Vá em: Produtos → Adicionar Novo
3. Preencha: nome, descrição, preço, imagem
4. Publique
5. Os produtos aparecem automaticamente na página Loja

---

### 5️⃣ **Comunidade** - `page-comunidade.php`
**URL:** `/comunidade`

**Conteúdo incluído:**
- ✅ Hero com imagem
- ✅ Grupos de Conexão
- ✅ Próximos Eventos (lista de eventos do Custom Post Type)
- ✅ Ações Sociais
- ✅ Cards com ícones e descrições

**Como usar:**
1. WordPress Admin → Páginas → Adicionar Nova
2. Título: **Comunidade**
3. Template: **Comunidade**
4. Publicar

**Adicionar eventos:**
1. Vá em: Eventos → Adicionar Novo
2. Preencha: título, descrição, imagem destacada
3. Preencha campos: Data, Horário, Local, Tipo
4. Publique
5. Eventos aparecem automaticamente na página Comunidade

---

### 6️⃣ **Agenda** - `page-agenda.php`
**URL:** `/agenda`

**Conteúdo incluído:**
- ✅ Hero com imagem
- ✅ Calendário interativo (JavaScript)
- ✅ Lista de próximos eventos
- ✅ Filtros por tipo (Culto, Célula, Workshop, Especial)
- ✅ Modal de inscrição em eventos

**Como usar:**
1. WordPress Admin → Páginas → Adicionar Nova
2. Título: **Agenda**
3. Template: **Agenda**
4. Publicar

**Funcionalidades:**
- Calendário gerado automaticamente em JavaScript
- Eventos vindos do Custom Post Type "Eventos"
- Filtro por tipo de evento
- Modal para inscrição (envia email via AJAX)

---

### 7️⃣ **Blog** - `archive.php`
**URL:** `/blog` ou página de posts

**Conteúdo incluído:**
- ✅ Hero com foto grande do Pastor Otavio
- ✅ Citação inspiradora
- ✅ Grid de posts do blog
- ✅ Paginação
- ✅ Categorias
- ✅ Metadados (autor, data, tempo de leitura)

**Como usar:**
1. Crie posts normalmente em: Posts → Adicionar Novo
2. A página de blog carrega automaticamente
3. Acesse via: `/blog` ou `/category/nome-da-categoria`

**Configurar página de blog:**
1. WordPress Admin → Configurações → Leitura
2. Opção 1: "Seus últimos posts" (blog na home)
3. Opção 2: "Uma página estática" → Selecione uma página para "Página de posts"

---

## 🎯 RESUMO: COMO CRIAR TODAS AS PÁGINAS

Execute estes passos no WordPress Admin:

```
1. Páginas → Adicionar Nova
   - Título: "Sobre"
   - Template: "Sobre"
   - Publicar

2. Páginas → Adicionar Nova
   - Título: "Contato"
   - Template: "Contato"
   - Publicar

3. Páginas → Adicionar Nova
   - Título: "Loja"
   - Template: "Loja"
   - Publicar

4. Páginas → Adicionar Nova
   - Título: "Comunidade"
   - Template: "Comunidade"
   - Publicar

5. Páginas → Adicionar Nova
   - Título: "Agenda"
   - Template: "Agenda"
   - Publicar
```

**Tempo total: 5 minutos** ⏱️

---

## 🔗 CONFIGURAR MENUS (Opcional)

Os menus já funcionam automaticamente, mas você pode customizá-los:

1. WordPress Admin → Aparência → Menus
2. Clique em "Criar um novo menu"
3. Nome do menu: "Menu Principal"
4. Adicione as páginas:
   - ☑️ Início (link personalizado: `/`)
   - ☑️ Sobre
   - ☑️ Blog
   - ☑️ Comunidade
   - ☑️ Agenda
   - ☑️ Loja
   - ☑️ Contato
5. Atribua ao local: "Menu Principal"
6. Salvar Menu

**Nota:** Se não configurar menu customizado, o tema usa menus padrão hardcoded automaticamente!

---

## 🎨 PERSONALIZAR CONTEÚDO DAS PÁGINAS

### Opção 1: Editar Arquivos PHP (Para Desenvolvedores)
- Edite os arquivos `page-*.php` no tema
- Mude textos, imagens, cores, layout
- Requer conhecimento de HTML/CSS/PHP

### Opção 2: Plugins de Page Builder (Para Usuários)
- Instale: Elementor ou Beaver Builder
- Crie páginas customizadas visualmente
- Mais fácil mas adiciona plugins

### Opção 3: Usar Como Está (Recomendado)
- As páginas já têm conteúdo completo e elegante
- Apenas crie as páginas no WordPress
- Funciona perfeitamente sem edições

---

## 📧 FORMULÁRIOS E EMAILS

### Formulários Funcionais:
1. **Contato** - Formulário na página de contato
2. **Modais** - 4 modais em várias páginas:
   - Inscrição (connectModal)
   - Voluntário (teamModal)
   - Batismo (baptismModal)
   - Oração (prayerModal)

### Configurar Email:
1. WordPress Admin → Configurações → Geral
2. Verifique o campo: **"E-mail de administração"**
3. Todos os formulários enviam para este email

### Melhorar Entrega de Emails:
1. Instale o plugin: **WP Mail SMTP**
2. Configure com Gmail, Outlook ou SendGrid
3. Garante que emails não caiam no spam

---

## 🆘 PROBLEMAS COMUNS

### "A página não está usando o template correto"
**Solução:** Ao criar a página, no lado direito em "Atributos da Página", selecione o Template correto (ex: "Sobre", "Contato", etc.)

### "Produtos não aparecem na Loja"
**Solução:** Instale o plugin WooCommerce e adicione produtos. Se não instalar, a página mostra produtos de exemplo.

### "Eventos não aparecem na Comunidade/Agenda"
**Solução:** Crie eventos em: Eventos → Adicionar Novo. Preencha os campos personalizados (data, horário, local, tipo).

### "Formulários não enviam email"
**Solução:** 
1. Verifique o email em Configurações → Geral
2. Instale o plugin WP Mail SMTP
3. Configure com um serviço SMTP confiável

### "Mapa não aparece na página Contato"
**Solução:** O Google Maps pode estar bloqueado. Edite `page-contato.php` e substitua o URL do iframe pelo seu endereço.

---

## ✨ RESULTADO FINAL

Após criar todas as páginas, seu site terá:

- ✅ **Início** - 7 seções completas
- ✅ **Sobre** - História, missão, valores, liderança
- ✅ **Blog** - Posts com design elegante
- ✅ **Comunidade** - Grupos e eventos
- ✅ **Agenda** - Calendário interativo
- ✅ **Loja** - Produtos (exemplo ou WooCommerce)
- ✅ **Contato** - Formulário, mapa, informações
- ✅ **Menus** - Header, Footer, Mobile
- ✅ **Modais** - 4 formulários funcionais
- ✅ **Rodapé** - Links, contato, horários

**Site 100% completo e profissional!** 🎉

---

## 🔗 LINKS ÚTEIS

- **Repositório:** https://github.com/Soli-25/HPC-Church-WordPress-Theme
- **Download v3.0:** https://github.com/Soli-25/HPC-Church-WordPress-Theme/raw/main/hpc-church-theme-v3-COMPLETO.zip
- **README Completo:** [README.md](README.md)
- **Instalação Rápida:** [INSTALACAO-RAPIDA.md](INSTALACAO-RAPIDA.md)

---

**Versão do Guia:** 3.0.0  
**Última Atualização:** 29 de Janeiro de 2025

Desenvolvido com ❤️ para HPC Church
