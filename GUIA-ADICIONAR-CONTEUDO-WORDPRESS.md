# 🎯 Guia Completo: Como Adicionar Conteúdo ao Tema HPC Church

## 📌 IMPORTANTE: Entenda a Diferença

### Site HTML (versão antiga)
- ✅ Conteúdo fixo no código
- ✅ Tudo aparece automaticamente
- ❌ Difícil de editar (precisa mexer no código)

### WordPress (versão nova)
- ✅ Conteúdo separado do design
- ✅ Fácil de editar (painel admin)
- ❌ Precisa adicionar conteúdo manualmente

**O tema WordPress já está instalado e funcionando! Agora você precisa adicionar o conteúdo através do painel administrativo.**

---

## 🚀 Passo a Passo Completo

### 1️⃣ CRIAR PÁGINAS (wp-admin → Páginas → Adicionar Nova)

#### Página: Sobre
1. Título: **Sobre**
2. Conteúdo: Adicione informações sobre a igreja
3. Template: **Padrão**
4. Publicar

#### Página: Comunidade
1. Título: **Comunidade**
2. Conteúdo: Texto de introdução sobre a comunidade
3. **IMPORTANTE**: No lado direito, em "Atributos da Página", selecione Template: **Comunidade**
4. Publicar

#### Página: Agenda
1. Título: **Agenda**
2. Conteúdo: Texto de introdução sobre eventos
3. **IMPORTANTE**: Template: **Agenda**
4. Publicar

#### Página: Loja
1. Título: **Loja**
2. Essa será criada automaticamente pelo WooCommerce (veja seção 5)

#### Página: Contato
1. Título: **Contato**
2. Conteúdo: Informações de contato
3. Template: **Padrão**
4. Publicar

#### Página: Ofertas
1. Título: **Ofertas**
2. Conteúdo: Informações sobre doações e ofertas
3. Template: **Padrão**
4. Publicar

#### Página: Blog (opcional)
1. Título: **Blog**
2. Deixe o conteúdo vazio (será preenchido automaticamente com posts)
3. Template: **Padrão**
4. Publicar

---

### 2️⃣ ADICIONAR POSTS NO BLOG (wp-admin → Posts → Adicionar Novo)

Crie pelo menos 3-5 posts para o blog aparecer na home:

#### Post 1: Exemplo
- **Título**: A Importância da Oração em Família
- **Conteúdo**: Escreva o texto do post
- **Imagem Destacada**: Adicione uma imagem (clique em "Definir Imagem Destacada" no lado direito)
- **Categorias**: Crie e selecione (ex: "Vida Espiritual")
- **Publicar**

#### Post 2: Exemplo
- **Título**: Descobrindo Seu Propósito em Cristo
- **Conteúdo**: Escreva o texto do post
- **Imagem Destacada**: Adicione uma imagem
- **Categorias**: "Propósito"
- **Publicar**

#### Post 3: Exemplo
- **Título**: Como Fortalecer Relacionamentos na Igreja
- **Conteúdo**: Escreva o texto do post
- **Imagem Destacada**: Adicione uma imagem
- **Categorias**: "Relacionamentos"
- **Publicar**

**💡 Dica**: Quanto mais posts você criar, mais rico ficará o blog!

---

### 3️⃣ ADICIONAR EVENTOS (wp-admin → Eventos → Adicionar Novo)

#### Evento 1: Culto Domingo
1. **Título**: Culto de Celebração - Domingo
2. **Conteúdo**: Descrição do culto
3. **Imagem Destacada**: Foto do culto
4. **Campos personalizados** (na parte inferior da página):
   - **Data do Evento**: 2024-02-04
   - **Horário**: 10:00
   - **Local**: Rua Principal, 123 - Centro
   - **Tipo de Evento**: Culto
5. **Publicar**

#### Evento 2: Célula
1. **Título**: Célula de Jovens
2. **Conteúdo**: Descrição da célula
3. **Imagem Destacada**: Foto de jovens
4. **Campos personalizados**:
   - **Data do Evento**: 2024-02-06
   - **Horário**: 19:30
   - **Local**: Casa dos Líderes
   - **Tipo de Evento**: Célula
5. **Publicar**

#### Evento 3: Workshop
1. **Título**: Workshop de Oração
2. **Conteúdo**: Descrição do workshop
3. **Imagem Destacada**: Imagem relacionada
4. **Campos personalizados**:
   - **Data do Evento**: 2024-02-10
   - **Horário**: 14:00
   - **Local**: Salão Principal
   - **Tipo de Evento**: Workshop
5. **Publicar**

**💡 Dica**: Adicione eventos futuros para o calendário ficar completo!

---

### 4️⃣ CONFIGURAR MENUS (wp-admin → Aparência → Menus)

#### Criar Menu Principal
1. Clique em **"Criar um novo menu"**
2. Nome do menu: **Menu Principal**
3. Clique em **"Criar Menu"**

#### Adicionar itens ao menu
1. No lado esquerdo, marque as páginas:
   - ☑️ Início (link personalizado: `/`)
   - ☑️ Sobre
   - ☑️ Blog
   - ☑️ Comunidade
   - ☑️ Agenda
   - ☑️ Loja
   - ☑️ Contato
   - ☑️ Ofertas

2. Clique em **"Adicionar ao Menu"**

3. Organize a ordem arrastando os itens

4. Em **"Configurações do Menu"**, marque:
   - ☑️ Menu Principal

5. Clique em **"Salvar Menu"**

---

### 5️⃣ INSTALAR E CONFIGURAR WOOCOMMERCE (Loja)

#### Instalar Plugin
1. Vá em **wp-admin → Plugins → Adicionar Novo**
2. Busque por: **WooCommerce**
3. Clique em **"Instalar Agora"**
4. Clique em **"Ativar"**
5. Siga o assistente de configuração:
   - Moeda: BRL (Real Brasileiro)
   - País: Brasil
   - Configure formas de pagamento (Pix, boleto, cartão)

#### Adicionar Produtos
1. Vá em **wp-admin → Produtos → Adicionar Novo**

**Produto 1: Livro do Pastor**
- Título: Livro: Vencendo com Cristo
- Descrição: Livro escrito pelo Pastor Otavio
- Preço: R$ 35,00
- Imagem do produto
- Publicar

**Produto 2: Bíblia de Estudo**
- Título: Bíblia de Estudo NVI
- Descrição: Bíblia com notas de estudo
- Preço: R$ 89,00
- Imagem do produto
- Publicar

**Produto 3: Camiseta HPC**
- Título: Camiseta HPC Church
- Descrição: Camiseta oficial da igreja
- Preço: R$ 45,00
- Imagem do produto
- Publicar

**💡 Dica**: Adicione mais produtos conforme necessário!

---

### 6️⃣ CONFIGURAR PÁGINA INICIAL (wp-admin → Configurações → Leitura)

Escolha uma das opções:

#### Opção A: Mostrar últimos posts (RECOMENDADO para HPC)
- Marque: **"Seus últimos posts"**
- A página inicial mostrará: Hero + Next Steps + Últimos Posts do Blog
- **Essa é a configuração atual do tema!**

#### Opção B: Página estática
- Marque: **"Uma página estática"**
- Selecione uma página para ser a home
- Selecione a página "Blog" para posts

**💡 Recomendação**: Use Opção A para o tema HPC funcionar perfeitamente!

---

### 7️⃣ CONFIGURAR PERMALINKS (wp-admin → Configurações → Links Permanentes)

1. Selecione: **"Nome do post"**
2. Clique em **"Salvar alterações"**

Isso fará suas URLs ficarem bonitas:
- ✅ `seusite.com/descobrindo-seu-proposito`
- ❌ `seusite.com/?p=123`

---

### 8️⃣ PERSONALIZAR INFORMAÇÕES DA IGREJA (wp-admin → Aparência → Personalizar)

1. Clique em **"Aparência"** → **"Personalizar"**
2. Procure por **"Informações da Igreja"** (seção customizada do tema)
3. Preencha:
   - **Endereço**: Rua Principal, 123 - Centro - Cidade/UF
   - **Telefone**: (11) 9999-9999
   - **Email**: contato@hpcchurch.com
   - **Instagram**: @hpcchurch
4. Clique em **"Publicar"**

---

### 9️⃣ ADICIONAR LOGO DA IGREJA (wp-admin → Aparência → Personalizar)

1. Clique em **"Identidade do Site"**
2. Clique em **"Selecionar Logo"**
3. Faça upload do logo da igreja (PNG com fundo transparente, 200x200px ideal)
4. Clique em **"Publicar"**

---

### 🔟 CONFIGURAR FORMULÁRIOS (Opcional - Plugin Contact Form 7)

#### Instalar Plugin
1. **wp-admin → Plugins → Adicionar Novo**
2. Busque: **Contact Form 7**
3. Instalar e Ativar

#### Nota sobre formulários do tema
O tema HPC já possui 4 formulários funcionais via AJAX:
- ✅ Formulário de Inscrição (Modal)
- ✅ Formulário de Voluntariado (Modal)
- ✅ Formulário de Batismo (Modal)
- ✅ Formulário de Pedido de Oração (Modal)

Esses formulários enviam emails automaticamente! Basta configurar:
1. Vá em **wp-admin → Configurações → Geral**
2. Verifique o **"E-mail de administração"** (para onde os formulários enviarão)

---

## ✅ CHECKLIST FINAL

Depois de seguir todos os passos, verifique se você tem:

- [ ] **8 páginas criadas** (Sobre, Comunidade, Agenda, Loja, Contato, Ofertas, Blog, Home)
- [ ] **3-5 posts no blog** com imagens destacadas
- [ ] **3+ eventos criados** com datas, horários e locais
- [ ] **Menu principal configurado** com todos os links
- [ ] **WooCommerce instalado** com produtos
- [ ] **Permalinks configurados** (Nome do post)
- [ ] **Informações da igreja preenchidas** (endereço, telefone, email, Instagram)
- [ ] **Logo da igreja adicionado**
- [ ] **Página inicial configurando mostrando** Hero + Next Steps + Blog

---

## 🎨 RESULTADO ESPERADO

### Página Inicial (/)
✅ Hero com título "Dê Seu Próximo Passo"  
✅ Seção "Descubra a HPC Church" com 3 cards  
✅ Últimos 3 posts do blog  
✅ Rodapé com redes sociais  

### Página Blog (/blog ou Posts)
✅ Foto grande do Pastor Otavio  
✅ Grid com todos os posts publicados  
✅ Paginação (se tiver mais de 9 posts)  

### Página Comunidade (/comunidade)
✅ Seção de Grupos de Conexão  
✅ Eventos da semana  
✅ Ações Sociais  

### Página Agenda (/agenda)
✅ Calendário interativo  
✅ Lista de próximos eventos  
✅ Filtros por tipo  

### Página Loja (/loja)
✅ Produtos WooCommerce  
✅ Carrinho de compras  
✅ Checkout  

---

## 🆘 PROBLEMAS COMUNS

### "A página inicial está em branco"
**Solução**: Você precisa criar posts no blog! Vá em Posts → Adicionar Novo e crie pelo menos 3 posts.

### "O menu não aparece"
**Solução**: Configure o menu em Aparência → Menus e atribua ao local "Menu Principal".

### "Os eventos não aparecem na página Comunidade"
**Solução**: Crie eventos em Eventos → Adicionar Novo e preencha os campos personalizados (data, horário, local).

### "Os formulários não enviam email"
**Solução**: Verifique o email de administração em Configurações → Geral. Pode ser necessário um plugin SMTP como WP Mail SMTP para garantir entrega.

### "A página Agenda não mostra eventos"
**Solução**: Crie eventos com datas FUTURAS para aparecerem no calendário.

### "A loja não aparece"
**Solução**: Instale o plugin WooCommerce e crie produtos.

---

## 📞 RESUMO RÁPIDO - 5 PASSOS ESSENCIAIS

1. **Criar Páginas**: Sobre, Comunidade (template), Agenda (template), Contato, Ofertas
2. **Adicionar Posts**: Mínimo 3 posts com imagens destacadas
3. **Criar Eventos**: Mínimo 3 eventos com datas, horários e locais
4. **Configurar Menu**: Aparência → Menus → Adicionar todas as páginas → Atribuir ao "Menu Principal"
5. **Instalar WooCommerce**: Plugins → Adicionar Novo → WooCommerce → Adicionar produtos

---

## 🎯 PRÓXIMOS PASSOS RECOMENDADOS

1. ✅ Seguir este guia passo a passo
2. ✅ Adicionar conteúdo real da sua igreja
3. ✅ Fazer backup regular do site
4. ✅ Testar todos os formulários
5. ✅ Adicionar mais posts e eventos regularmente
6. ✅ Monitorar emails dos formulários
7. ✅ Atualizar eventos semanalmente

---

## 💡 DICA DE OURO

**WordPress é um CMS (Content Management System)**. Isso significa que:
- 🎨 **Tema** = Design + Estrutura (já instalado ✅)
- 📝 **Conteúdo** = Textos, Imagens, Posts, Eventos (você adiciona via painel admin)

O tema HPC Church está **100% completo e funcional**! Agora é só adicionar o conteúdo através do painel administrativo seguindo este guia.

---

## 📚 RECURSOS ADICIONAIS

- **WordPress.org**: https://br.wordpress.org/support/
- **WooCommerce Docs**: https://woocommerce.com/documentation/
- **YouTube**: Busque "Como usar WordPress em português"

---

**Criado para HPC Church WordPress Theme v1.0.0**  
**Última atualização**: 2024-01-29

---

## 🚀 COMEÇAR AGORA

Abra seu site WordPress, faça login em `seusite.com/wp-admin` e comece pelo **Passo 1: Criar Páginas**!

Boa sorte! 🙏✨
