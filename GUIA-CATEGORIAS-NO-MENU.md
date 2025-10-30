# 📋 GUIA VISUAL: Como Adicionar Categorias ao Menu do WordPress

**Objetivo:** Criar blogs separados (Blog do Pastor, Blog de Jovens, etc.) e adicionar links no menu do site.

---

## 🎯 RESUMO RÁPIDO (3 Passos)

1. **Criar Categorias** (Posts → Categorias)
2. **Criar Posts** e atribuir à categoria
3. **Adicionar ao Menu** (Aparência → Menus)

---

## 📝 PASSO 1: CRIAR CATEGORIAS

### O que você vai ver:

```
┌─────────────────────────────────────────┐
│ WordPress Admin                      ▼  │
├─────────────────────────────────────────┤
│                                         │
│  Painel                                 │
│  Posts  ◄─── CLIQUE AQUI               │
│  │                                      │
│  ├─ Todos os Posts                     │
│  ├─ Adicionar Novo                     │
│  └─ Categorias  ◄─── DEPOIS AQUI       │
│                                         │
└─────────────────────────────────────────┘
```

### 1.1 - Acesse as Categorias

1. **No menu lateral esquerdo do WordPress Admin**
2. Clique em: **Posts**
3. Clique em: **Categorias**

### 1.2 - Criar Nova Categoria

Você verá esta tela:

```
┌───────────────────────────────────────────────────────┐
│ Adicionar Nova Categoria                              │
├───────────────────────────────────────────────────────┤
│                                                       │
│  Nome                                                 │
│  ┌─────────────────────────────────────────┐         │
│  │ Blog do Pastor                          │ ◄─ DIGITE AQUI
│  └─────────────────────────────────────────┘         │
│                                                       │
│  Slug (URL)                                           │
│  ┌─────────────────────────────────────────┐         │
│  │ pastor                                  │ ◄─ PREENCHE SOZINHO
│  └─────────────────────────────────────────┘         │
│                                                       │
│  Descrição (opcional)                                 │
│  ┌─────────────────────────────────────────┐         │
│  │ Posts escritos pelo Pastor              │         │
│  └─────────────────────────────────────────┘         │
│                                                       │
│  [Adicionar Nova Categoria] ◄─── CLIQUE PARA SALVAR  │
│                                                       │
└───────────────────────────────────────────────────────┘
```

### 1.3 - Repita para Outras Categorias

Crie quantas categorias quiser:

| Nome               | Slug         | Descrição                          |
|--------------------|--------------|------------------------------------|
| Blog do Pastor     | pastor       | Posts escritos pelo Pastor         |
| Blog de Jovens     | jovens       | Conteúdo para jovens da igreja     |
| Blog de Mulheres   | mulheres     | Ministério feminino                |
| Blog de Casais     | casais       | Relacionamentos e casamento        |
| Blog de Crianças   | criancas     | Ministério infantil                |

**✅ Categorias criadas com sucesso!**

---

## ✍️ PASSO 2: CRIAR POSTS E ATRIBUIR CATEGORIA

### 2.1 - Criar Novo Post

```
┌─────────────────────────────────────────┐
│ WordPress Admin                      ▼  │
├─────────────────────────────────────────┤
│                                         │
│  Posts  ◄─── CLIQUE AQUI               │
│  ├─ Todos os Posts                     │
│  └─ Adicionar Novo  ◄─── DEPOIS AQUI   │
│                                         │
└─────────────────────────────────────────┘
```

1. Clique em: **Posts** → **Adicionar Novo**

### 2.2 - Editor do Post

Você verá esta tela:

```
┌─────────────────────────────────────────────────────────────┐
│ Adicionar Novo Post                                         │
├─────────────────────────────────────────────────────────────┤
│                                                             │
│  ┌───────────────────────────────────────────────┐         │
│  │ Título: Uma Palavra de Esperança              │ ◄─ TÍTULO
│  └───────────────────────────────────────────────┘         │
│                                                             │
│  ┌───────────────────────────────────────────────┐         │
│  │                                               │         │
│  │ Conteúdo do post aqui...                      │ ◄─ CONTEÚDO
│  │                                               │         │
│  └───────────────────────────────────────────────┘         │
│                                                             │
└─────────────────────────────────────────────────────────────┘
```

### 2.3 - Atribuir Categoria (IMPORTANTE!)

**No lado direito da tela**, você verá um painel:

```
┌──────────────────────────────────────┐
│ Publicar                             │
├──────────────────────────────────────┤
│                                      │
│  [Publicar]  [Pré-visualizar]       │
│                                      │
└──────────────────────────────────────┘

┌──────────────────────────────────────┐
│ Categorias  ◄─── ENCONTRE ESTE BOX  │
├──────────────────────────────────────┤
│                                      │
│  ☐ Sem categoria                     │
│  ☑ Blog do Pastor  ◄─── MARQUE AQUI │
│  ☐ Blog de Jovens                    │
│  ☐ Blog de Mulheres                  │
│                                      │
└──────────────────────────────────────┘
```

### 2.4 - Publicar

1. Marque a categoria desejada
2. Clique em: **Publicar**

**✅ Post criado e atribuído à categoria!**

---

## 🎨 PASSO 3: ADICIONAR CATEGORIAS AO MENU

### 3.1 - Acessar Menu do WordPress

```
┌─────────────────────────────────────────┐
│ WordPress Admin                      ▼  │
├─────────────────────────────────────────┤
│                                         │
│  Aparência  ◄─── CLIQUE AQUI           │
│  │                                      │
│  ├─ Temas                              │
│  ├─ Personalizar                       │
│  ├─ Widgets                            │
│  └─ Menus  ◄─── DEPOIS AQUI            │
│                                         │
└─────────────────────────────────────────┘
```

1. Clique em: **Aparência**
2. Clique em: **Menus**

### 3.2 - Tela de Edição de Menus

Você verá esta tela dividida em **DUAS COLUNAS**:

```
┌───────────────────────────────────────────────────────────────────────────┐
│ Menus                                                                     │
├───────────────────────────────────────────────────────────────────────────┤
│                                                                           │
│  COLUNA ESQUERDA          │  COLUNA DIREITA                              │
│  (Adicionar Itens)        │  (Estrutura do Menu)                         │
│                           │                                              │
│  ┌────────────────────┐   │  ┌────────────────────────────────────┐     │
│  │ Páginas            │   │  │ Estrutura do Menu                  │     │
│  │ Posts              │   │  │                                    │     │
│  │ Links Customizados │   │  │ ▼ Início                           │     │
│  │ Categorias ◄────   │   │  │ ▼ Sobre                            │     │
│  └────────────────────┘   │  │ ▼ Blog                             │     │
│                           │  │ ▼ Comunidade                       │     │
│                           │  │                                    │     │
│                           │  │ [Salvar Menu] ◄─── SALVAR AQUI     │     │
│                           │  └────────────────────────────────────┘     │
│                           │                                              │
└───────────────────────────────────────────────────────────────────────────┘
```

### 3.3 - Expandir "Categorias"

**Na COLUNA ESQUERDA:**

1. Procure por: **Categorias**
2. Clique na setinha para expandir:

```
┌────────────────────────────────────┐
│ Categorias  ▼  ◄─── CLIQUE AQUI   │
├────────────────────────────────────┤
│                                    │
│  ☐ Blog do Pastor                  │
│  ☐ Blog de Jovens                  │
│  ☐ Blog de Mulheres                │
│  ☐ Blog de Casais                  │
│                                    │
│  [Selecionar Tudo]                 │
│  [Adicionar ao Menu] ◄─── DEPOIS AQUI│
│                                    │
└────────────────────────────────────┘
```

### 3.4 - Selecionar Categorias

1. **Marque as categorias** que você quer no menu:
   - ☑ Blog do Pastor
   - ☑ Blog de Jovens
   - ☑ Blog de Mulheres

2. Clique em: **[Adicionar ao Menu]**

### 3.5 - Resultado na Coluna Direita

**Na COLUNA DIREITA**, as categorias vão aparecer:

```
┌─────────────────────────────────────────────┐
│ Estrutura do Menu                           │
├─────────────────────────────────────────────┤
│                                             │
│  ▼ Início                                   │
│  ▼ Sobre                                    │
│  ▼ Blog                                     │
│  ▼ Blog do Pastor      ◄─── NOVA!          │
│  ▼ Blog de Jovens      ◄─── NOVA!          │
│  ▼ Blog de Mulheres    ◄─── NOVA!          │
│  ▼ Comunidade                               │
│  ▼ Agenda                                   │
│                                             │
│  [Salvar Menu] ◄─── CLIQUE PARA SALVAR     │
│                                             │
└─────────────────────────────────────────────┘
```

### 3.6 - Organizar Categorias (OPCIONAL)

Você pode **arrastar e soltar** para organizar:

**Opção A: Categorias no nível principal**
```
▼ Início
▼ Sobre
▼ Blog
▼ Blog do Pastor
▼ Blog de Jovens
▼ Comunidade
```

**Opção B: Categorias como sub-itens de "Blog"** (RECOMENDADO)

Arraste as categorias **um pouco para a direita** abaixo de "Blog":

```
▼ Início
▼ Sobre
▼ Blog
  ├─ Blog do Pastor    ◄─── SUB-ITEM (arraste para direita)
  ├─ Blog de Jovens    ◄─── SUB-ITEM (arraste para direita)
  └─ Blog de Mulheres  ◄─── SUB-ITEM (arraste para direita)
▼ Comunidade
```

**Como arrastar para criar sub-item:**
1. Clique e segure no item "Blog do Pastor"
2. Arraste **um pouco para a DIREITA** (vai aparecer uma linha indicando sub-nível)
3. Solte abaixo de "Blog"

### 3.7 - SALVAR O MENU

**IMPORTANTE:** Não esqueça de salvar!

```
┌─────────────────────────────────────┐
│                                     │
│  [Salvar Menu] ◄─── CLIQUE AQUI    │
│                                     │
└─────────────────────────────────────┘
```

**✅ Menu salvo com sucesso!**

---

## 🎉 RESULTADO FINAL NO SITE

### No Header do Site:

```
┌───────────────────────────────────────────────────────┐
│ HPC CHURCH                                         ☰  │
├───────────────────────────────────────────────────────┤
│                                                       │
│  Início | Sobre | Blog ▼ | Comunidade | Agenda       │
│                      │                                │
│                      ├─ Blog do Pastor                │
│                      ├─ Blog de Jovens                │
│                      └─ Blog de Mulheres              │
│                                                       │
└───────────────────────────────────────────────────────┘
```

### URLs Criadas Automaticamente:

Cada categoria tem sua própria URL:

| Categoria          | URL                                    |
|--------------------|----------------------------------------|
| Blog do Pastor     | `seusite.com/categoria/pastor`         |
| Blog de Jovens     | `seusite.com/categoria/jovens`         |
| Blog de Mulheres   | `seusite.com/categoria/mulheres`       |

---

## 📸 RESUMO VISUAL COMPLETO

### Fluxo Completo:

```
1. CRIAR CATEGORIAS
   Posts → Categorias → Adicionar Nova
   ↓

2. CRIAR POSTS
   Posts → Adicionar Novo
   ↓
   Marcar Categoria (lado direito)
   ↓

3. ADICIONAR AO MENU
   Aparência → Menus
   ↓
   Coluna Esquerda: Categorias ▼
   ↓
   Marcar categorias
   ↓
   [Adicionar ao Menu]
   ↓
   Coluna Direita: Organizar
   ↓
   [Salvar Menu]
   ↓

4. VERIFICAR NO SITE
   Ir ao site → Clicar em "Blog" → Ver sub-itens
```

---

## 💡 DICAS IMPORTANTES

### ✅ O que você DEVE fazer:

1. **Criar categorias ANTES** de criar posts
2. **Sempre marcar a categoria** ao criar um post
3. **Salvar o menu** depois de adicionar categorias
4. **Testar no site** para confirmar que está funcionando

### ❌ Erros Comuns:

1. **Não marcar categoria no post** → Post não aparece na categoria
2. **Não salvar o menu** → Categorias não aparecem no site
3. **Não criar posts** → Categoria existe mas está vazia

---

## 🔗 LINKS ÚTEIS

- **Criar Categorias:** `wp-admin/edit-tags.php?taxonomy=category`
- **Criar Posts:** `wp-admin/post-new.php`
- **Editar Menus:** `wp-admin/nav-menus.php`

---

## 🆘 PRECISA DE AJUDA?

Se você:
- ❌ Não está vendo "Categorias" na coluna esquerda
- ❌ Categorias não aparecem no site
- ❌ Menu não está salvando

**Solução:** Verifique se:
1. Você criou pelo menos 1 categoria
2. Você salvou o menu após adicionar categorias
3. Você está editando o menu correto (Menu Principal)

---

## ✨ PRÓXIMOS PASSOS

Depois de adicionar categorias ao menu:

1. **Criar mais posts** para cada categoria
2. **Personalizar o layout** do blog (se necessário)
3. **Adicionar imagens** aos posts
4. **Configurar autor** nos posts (Pastor, Líder de Jovens, etc.)

---

**🎯 Pronto! Agora você tem blogs separados no seu menu WordPress!**

*Cada categoria funciona como um blog independente com sua própria URL.*
