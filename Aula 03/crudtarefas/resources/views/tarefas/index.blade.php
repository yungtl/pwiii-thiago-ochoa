<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Minhas Tarefas</title>
</head>
<body>

<div class="container">
    <h1>Lista de Tarefas</h1>
    <p class="description">Gerencie suas atividades diárias com facilidade.</p>

    <ul class="task-list"> 
        @foreach($tarefas as $tarefa)
            <li class="task-item">
                <span class="task-title">{{ $tarefa->titulo }}</span>

                <div class="actions">
                    <a href="/tarefas/{{ $tarefa->id }}/edit" class="btn-edit">Editar</a>

                    <form action="/tarefas/{{ $tarefa->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete" onclick="return confirm('Tem certeza que deseja deletar?')">Deletar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

    <form action="/tarefas" method="POST" class="add-form"> 
        @csrf
        <input type="text" name="titulo" placeholder="O que você precisa fazer hoje?" required>
        
        <button type="submit" class="btn-save">Salvar Tarefa</button>
    </form>
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
        max-width: 600px; 
        background: white; 
        padding: 30px; 
        border-radius: 15px; 
        box-shadow: 0 10px 25px rgba(0,0,0,0.1); 
        text-align: center; 
    }

    h1 { 
        color: #2c3e50; 
        margin-bottom: 10px; 
    }

    .description { 
        color: #7f8c8d; 
        margin-bottom: 30px; 
        font-size: 0.9em; 
    }

    .task-list { 
        list-style: none; 
        padding: 0; 
    }

    .task-item { 
        background: #f9f9f9; 
        padding: 15px; 
        margin-bottom: 10px; 
        border-radius: 8px; 
        display: flex; 
        justify-content: space-between; 
        align-items: center; 
        border-left: 5px solid #3498db; 
    }

    .task-title { 
        font-weight: 600; 
        color: #34495e; 
    }

    .actions { 
        display: flex; 
        gap: 10px; 
    }

    .btn-edit { 
        color: #3498db; 
        text-decoration: none; 
        font-weight: bold; 
        font-size: 0.85em; 
    }

    .btn-delete { 
        background: #e74c3c; 
        color: white; 
        border: none; 
        padding: 5px 10px; 
        border-radius: 5px; 
        cursor: pointer; 
        font-size: 0.85em; 
    }

    .add-form { 
        margin-top: 30px; 
        display: flex; 
        flex-direction: column; 
        gap: 10px; 
    }

    input { 
        padding: 18px; 
        border: 2px solid #ddd; 
        border-radius: 8px; 
        outline: none; 
        width: 100%;
        box-sizing: border-box;
    }

    .btn-save { 
        padding: 15px; 
        background