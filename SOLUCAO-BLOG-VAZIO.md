# 🔧 SOLUÇÃO: Blog Não Mostra Posts

## ⚠️ PROBLEMA:
- Você criou posts ✅
- Posts estão publicados ✅
- Mas a página `/blog` está vazia ❌

## 🎯 CAUSA:
O WordPress não sabe que a página "Blog" deve mostrar os posts.

---

## ✅ SOLUÇÃO (2 Minutos):

### PASSO 1: Acessar Configurações de Leitura

```
┌─────────────────────────────────────────┐
│ WordPress Admin (Menu Lateral)          │
├─────────────────────────────────────────┤
│                                         │
│  Configurações  ◄─── CLIQUE AQUI       │
│  │                                      │
│  ├─ Gerais                              │
│  ├─ Escrita                             │
│  ├─ Leitura  ◄─── DEPOIS AQUI          │
│  ├─ Discussão                           │
│  └─ Permalinks                          │
│                                         │
└─────────────────────────────────────────┘
```

1. Clique em: **Configurações**
2. Clique em: **Leitura**

---

### PASSO 2: Configurar "Página de Posts"

Você verá esta tela:

```
┌──────────────────────────────────────────────────────┐
│ Configurações de Leitura                             │
├──────────────────────────────────────────────────────┤
│                                                      │
│  A sua página inicial exibe:                         │
│                                                      │
│  ⦿ Os seus posts mais recentes  ◄─── MUDAR ISTO     │
│  ○ Uma página estática                               │
│                                                      │
└──────────────────────────────────────────────────────┘
```

**OPÇÃO A: Se Você Quer Homepage com Posts** (Lista de Posts na Página Inicial)

Deixe marcado: **⦿ Os seus posts mais recentes**

```
┌──────────────────────────────────────────────────────┐
│  A sua página inicial exibe:                         │
│                                                      │
│  ⦿ Os seus posts mais recentes  ◄─── DEIXAR ASSIM   │
│                                                      │
└──────────────────────────────────────────────────────┘
```

**Resultado:**
- Homepage (`/`) → Mostra lista de posts
- `/blog` → Não existe mais

---

**OPÇÃO B: Se Você Quer Homepage Personalizada + Página de Blog Separada** ⭐ RECOMENDADO

Marque: **⦿ Uma página estática**

```
┌──────────────────────────────────────────────────────┐
│  A sua página inicial exibe:                         │
│                                                      │
│  ○ Os seus posts mais recentes                       │
│  ⦿ Uma página estática  ◄─── MARCAR ESTE            │
│                                                      │
│  Página inicial:  [Selecione] ▼  ◄─── ESCOLHER      │
│                    ├─ Início                         │
│                    ├─ Sobre                          │
│                    ├─ Blog                           │
│                    └─ Contato                        │
│                                                      │
│  Página de posts: [Selecione] ▼  ◄─── ESCOLHER      │
│                    ├─ Blog  ◄─── SELECIONAR ESTE    │
│                    ├─ Notícias                       │
│                    └─ Novidades                      │
│                                                      │
└──────────────────────────────────────────────────────┘
```

**Configure:**
1. Marque: **⦿ Uma página estática**
2. **Página inicial:** Selecione `Início` (ou a página que você quer como homepage)
3. **Página de posts:** Selecione `Blog` ◄─── **IMPORTANTE!**

---

### PASSO 3: Salvar Alterações

```
┌─────────────────────────────────────┐
│                                     │
│  [Salvar Alterações] ◄─── CLICAR   │
│                                     │
└─────────────────────────────────────┘
```

Clique em: **[Salvar Alterações]**

---

## ✅ RESULTADO:

Depois de salvar, acesse: `https://somamotors.pt/hpc/blog`

Você verá:

```
┌──────────────────────────────────────────────┐
│ Blog                                         │
├──────────────────────────────────────────────┤
│                                              │
│  📝 Palavras de Fé                           │
│  Por admin | 30 out 2025                    │
│  Categoria: Palavras de Fé                   │
│  [Ler Mais →]                                │
│                                              │
│  ─────────────────────────────────           │
│                                              │
│  📝 Blog                                     │
│  Por admin | 30 out 2025                    │
│  Categoria: Palavras de Fé                   │
│  [Ler Mais →]                                │
│                                              │
└──────────────────────────────────────────────┘
```

---

## 🎯 RESUMO:

### Antes:
```
❌ Homepage (/) → Conteúdo estático do tema
❌ Blog (/blog) → Página vazia (não mostra posts)
✅ Posts criados → Existem mas não aparecem
```

### Depois:
```
✅ Homepage (/) → Conteúdo estático do tema (página "Início")
✅ Blog (/blog) → Lista todos os posts publicados
✅ Posts aparecem → Visíveis na página Blog
```

---

## 💡 DICA EXTRA: Criar Página "Blog" (Se Não Existe)

Se você não vê "Blog" na lista de páginas:

1. Vá em: **Páginas** → **Adicionar Nova**
2. **Título:** `Blog`
3. **Conteúdo:** Deixe vazio (o WordPress vai preencher automaticamente com os posts)
4. Clique em: **Publicar**
5. Volte para: **Configurações** → **Leitura**
6. Selecione "Blog" como **Página de posts**

---

## 🆘 PROBLEMAS COMUNS:

### ❌ "Não vejo opção 'Página de posts'"
**Causa:** Você não marcou "Uma página estática"  
**Solução:** Marque primeiro "⦿ Uma página estática", depois a opção aparece

### ❌ "Posts ainda não aparecem"
**Causa:** Cache do navegador  
**Solução:** 
1. Pressione `Ctrl + Shift + R` (Windows) ou `Cmd + Shift + R` (Mac)
2. Ou abra em aba anônima

### ❌ "Página Blog mostra erro 404"
**Causa:** Permalinks não atualizados  
**Solução:**
1. Vá em: **Configurações** → **Permalinks**
2. Clique em: **Salvar Alterações** (mesmo sem mudar nada)

---

## 🎉 PRONTO!

Agora seus posts vão aparecer em: `https://somamotors.pt/hpc/blog`

---

## 📋 PRÓXIMOS PASSOS:

Depois que os posts aparecerem:

1. ✅ Criar mais posts
2. ✅ Criar categorias (Palavras de Fé, Jovens, Mulheres, etc.)
3. ✅ Adicionar categorias ao menu (ver GUIA-CATEGORIAS-NO-MENU.md)
4. ✅ Personalizar o design do blog

---

**🎯 Esta é a configuração mais comum do WordPress para sites de igreja:**

```
Homepage (/) → Conteúdo personalizado do tema
Blog (/blog) → Lista de posts do pastor/igreja
```
