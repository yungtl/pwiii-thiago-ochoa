# Guia de Inicialização de Projetos Spring Boot

Este repositório contém um passo a passo completo para criar e inicializar uma aplicação Java utilizando o **Spring Boot** através de diferentes ferramentas e IDEs.

## 🛠️ Pré-requisitos Gerais

Antes de iniciar por qualquer método, certifique-se de ter instalado em sua máquina:

* **JDK (Java Development Kit):** versão 17 ou superior instalada e configurada nas variáveis de ambiente (`JAVA_HOME`).
* **Gerenciador de Dependências:** Maven ou Gradle.

---

## 🌐 1. Criando pelo Navegador (Spring Initializr)

A forma mais universal e oficial de gerar um projeto Spring Boot.

1. Acesse o site oficial: [start.spring.io](https://start.spring.io/).

2. Configure as opções do projeto:

   * **Project:** Maven ou Gradle.
   * **Language:** Java.
   * **Spring Boot:** selecione a versão estável mais recente (evite versões com *SNAPSHOT* ou *M*).
   * **Project Metadata:**

     * **Group:** `com.exemplo` (ou o pacote da sua instituição/empresa).
     * **Artifact:** `demo` (nome do projeto).
     * **Packaging:** Jar.
     * **Java:** 17 ou 21.

3. Adicione as dependências iniciais no botão **ADD DEPENDENCIES...**.

   Exemplos:

   * Spring Web
   * Spring Boot DevTools
   * Lombok

4. Clique em **GENERATE** para baixar o arquivo `.zip`.

5. Extraia o arquivo baixado em uma pasta de sua preferência.

6. Abra a pasta extraída na sua IDE favorita.

---

## 💙 2. Criando pelo VS Code

Para criar projetos diretamente no Visual Studio Code, utilize as extensões oficiais da Microsoft/VMware.

### Configuração Inicial

1. Abra o VS Code.

2. Vá em **Extensions** (`Ctrl + Shift + X`).

3. Instale os seguintes pacotes:

   * **Extension Pack for Java**
   * **Spring Boot Extension Pack**

### Passo a Passo

1. Abra o **Command Palette** (`Ctrl + Shift + P` ou `F1`).

2. Digite e selecione:

   ```text
   Spring Initializr: Create a Maven Project
   ```

   Ou, caso prefira Gradle:

   ```text
   Spring Initializr: Create a Gradle Project
   ```

3. Escolha a versão do **Spring Boot**.

4. Selecione a linguagem: **Java**.

5. Insira o **Group ID**, por exemplo:

   ```text
   com.exemplo
   ```

6. Insira o **Artifact ID**, por exemplo:

   ```text
   meu-projeto
   ```

7. Selecione o tipo de empacotamento: **JAR**.

8. Escolha a versão do Java, por exemplo:

   ```text
   17
   ```

9. Marque as dependências desejadas, por exemplo:

   ```text
   Spring Web
   ```

   Pressione `Enter` para confirmar.

10. Escolha a pasta onde o projeto será salvo e clique em **Generate into this folder**.

11. Clique em **Open** no aviso que aparecer no canto inferior direito.

---

## 🚀 3. Criando pelo IntelliJ IDEA

> **Nota:** o suporte nativo via interface gráfica do Spring Initializr requer o **IntelliJ IDEA Ultimate**. Na versão **Community**, utilize o fluxo alternativo indicado abaixo.

### Opção A: IntelliJ IDEA Ultimate

1. Abra o IntelliJ IDEA e clique em **New Project**.

2. No menu lateral esquerdo, selecione **Spring Initializr**.

3. Configure:

   * Nome do projeto;
   * Localização;
   * Linguagem: Java;
   * Gerenciador: Maven ou Gradle.

4. Clique em **Next**.

5. Escolha a versão do Spring Boot e marque as dependências desejadas.

6. Clique em **Create**.

### Opção B: IntelliJ IDEA Community

1. Gere o projeto compactado `.zip` através do site [start.spring.io](https://start.spring.io/).

2. Abra o IntelliJ IDEA.

3. Clique em **Open** e selecione a pasta extraída.

4. Aguarde o IntelliJ carregar o arquivo `pom.xml` ou `build.gradle` e baixar as dependências automaticamente.

---

## 🍃 4. Criando pelo Eclipse / Spring Tool Suite (STS)

Se estiver utilizando o **Spring Tool Suite 4** ou o Eclipse com o plugin **Spring Tools** instalado:

1. Acesse o menu superior:

   **File > New > Spring Starter Project**

2. Confirme a URL do serviço:

   ```text
   https://start.spring.io
   ```

3. Preencha os campos:

   * `Name`
   * `Group`
   * `Artifact`
   * `Java Version`
   * `Type` (Maven/Gradle)

4. Clique em **Next**.

5. Selecione a versão do Spring Boot e busque as dependências necessárias.

6. Clique em **Finish**.

---

## 💻 5. Criando via Linha de Comando (Spring Boot CLI)

Caso tenha a ferramenta de linha de comando do Spring instalada (`spring-cli`), é possível criar o projeto diretamente pelo terminal.

### Criando um projeto Maven

```bash
spring init --build=maven --dependencies=web,devtools --java-version=17 meu-projeto
```

Após a execução, navegue até a pasta criada:

```bash
cd meu-projeto
```

---

## ▶️ Como Executar a Aplicação

Independentemente da ferramenta utilizada para criar o projeto, existem diferentes formas de executar a aplicação.

### Via Terminal

Execute os comandos a partir da **raiz do projeto**.

#### Projetos Maven

No Linux/macOS:

```bash
./mvnw spring-boot:run
```

No Windows Command Prompt:

```cmd
mvnw.cmd spring-boot:run
```

#### Projetos Gradle

No Linux/macOS:

```bash
./gradlew bootRun
```

No Windows Command Prompt:

```cmd
gradlew.bat bootRun
```

### Via IDE

Localize a classe principal que possui a anotação `@SpringBootApplication`.

Normalmente, ela estará localizada em um caminho semelhante a:

```text
src/main/java/com/exemplo/demo/DemoApplication.java
```

Clique com o botão direito sobre a classe e selecione:

* **Run** para executar;
* **Debug** para executar em modo de depuração.

---

## 🌍 Acessando a Aplicação

Após iniciar corretamente, a aplicação estará disponível, por padrão, no endereço:

```text
http://localhost:8080
```

Abra esse endereço no navegador para acessar a aplicação.

---

## 📁 Estrutura Básica do Projeto

Um projeto Spring Boot gerado pelo Spring Initializr normalmente apresenta uma estrutura semelhante a:

```text
meu-projeto/
├── .mvn/
├── src/
│   ├── main/
│   │   ├── java/
│   │   │   └── com/
│   │   │       └── exemplo/
│   │   │           └── demo/
│   │   │               └── DemoApplication.java
│   │   └── resources/
│   │       ├── static/
│   │       ├── templates/
│   │       └── application.properties
│   └── test/
│       └── java/
├── .gitignore
├── mvnw
├── mvnw.cmd
└── pom.xml
```

A estrutura pode variar de acordo com o gerenciador de dependências, configurações e dependências selecionadas durante a criação do projeto.

---

## ✅ Resumo

Você pode inicializar um projeto Spring Boot utilizando:

| Método       | Ferramenta                  |
| ------------ | --------------------------- |
| 🌐 Navegador | Spring Initializr           |
| 💙 IDE       | VS Code                     |
| 🚀 IDE       | IntelliJ IDEA               |
| 🍃 IDE       | Eclipse / Spring Tool Suite |
| 💻 Terminal  | Spring Boot CLI             |

Depois de criar o projeto, basta configurar as dependências necessárias, executar a aplicação e acessar:

```text
http://localhost:8080
```
## 👩‍💻 Autora

Desenvolvido por **Sara Coni**  
Etec Professor Camargo Aranha — São Paulo, 2026