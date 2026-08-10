<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Tarefa</title>
</head>
<body>

<div class="container">
    <h1>✏️ Edição de Tarefa</h1>
    
    <p>Faça as modificações necessárias e salve para atualizar o sistema.</p>
    
    <form action="/tarefas/{{ $tarefa->id }}" method="POST" class="edit-form">
        @csrf
        @method('PUT') 
        
        <input type="text" name="titulo" value="{{ $tarefa->titulo }}" required>
        
        <button type="submit" class="btn-update">Salvar Alterações</button>
    </form>
    
    <a href="/tarefas" class="btn-back">← Voltar para a lista</a>
</div>

<style>
    body { 
        font-family: 'Segoe UI', sans-serif; 
        background-color: #eef2f3; 
        padding: 50px; 
        display: flex; 
        justify-content: center; 
    }

    .container { 
        width: 100%; 
        max-width: 500px; 
        background: white; 
        padding: 30px; 
        border-radius: 15px; 
        box-shadow: 0 10px 25px rgba(0,0,0,0.1); 
        text-align: center; 
    }

    h1 { 
        color: #2c3e50; 
    }

    p { 
        color: #7f8c8d; 
        margin-bottom: 25px; 
    }
        
    .edit-form { 
        display: flex; 
        flex-direction: column; 
        gap: 15px; 
    }

    input { 
        padding: 15px; 
        border: 2px solid #3498db; 
        border-radius: 8px; 
        font-size: 1em; 
        width: 100%;
        box-sizing: border-box; /* Garante que o padding não quebre o tamanho */
    }

    .btn-update { 
        padding: 15px; 
        background: #3498db; 
        color: white; 
        border: none; 
        border-radius: 8px; 
        font-weight: bold; 
        cursor: pointer; 
        transition: 0.3s;
    }

    .btn-update:hover {
        background: #2980b9;
    }

    .btn-back { 
        display: inline-block; 
        margin-top: 20px; 
        color: #7f8c8d; 
        text-decoration: none; 
        font-size: 0.9em; 
    }
</style>
</body>
</html>