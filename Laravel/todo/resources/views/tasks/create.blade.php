<x-layout pageTitle="Todo: Create Task">

    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Home
        </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Task</h1>
        <form action="">

            <x-form.textInput name="title" label="Titulo da Task" required="required"
                placeholder="Digite o titulo da sua Task" />

            <x-form.textInput name="due_date" label="Data de Realizacao" type="date" required="required" />

            <x-form.selectInput name="category" label="Categoria da Task" required="required">
                <option>Valor qualquer</option>
            </x-form.selectInput>

            <x-form.textAreaInput name="description" label="Descricao da Task"
                placeholder="Digite a descricao para a sua Task" />

            <x-form.formButton resetText="Resetar" submitText="Criar Task" />

        </form>
    </section>
</x-layout>
