<header class="mb-6">
    <h1 class="title has-text-weight-light is-size-1">Application Permission</h1>
    <h2 class="subtitle has-text-weight-light">View Application Permission Attributes</h2>
</header>

@if (session()->has('message'))
    <div class="notification">
        {{ session('message') }}
    </div>
@endif

<div class="card">

    <div class="card-content">

        <nav class="level mb-6">
            <!-- Left side -->
            <div class="level-left">

                <p class="level-item">
                    <a href="/admin-permissions/list">
                        <span class="icon is-small"><x-carbon-table /></span>
                        <span>List All</span>
                    </a>
                </p>

                <p class="level-item">
                    <a href="/admin-permissions/form/">
                        <span class="icon is-small"><x-carbon-add /></span>
                        <span>Add</span>
                    </a>
                </p>

            </div>

            <!-- Right side -->
            <div class="level-right">

                <p class="level-item">
                    <a href='/admin-permissions/form/{{ $pid }}'>
                        <span class="icon"><x-carbon-edit /></span>
                    </a>
                </p>

                <p class="level-item">
                    <a wire:click='triggerDelete({{ $pid }})'>
                        <span class="icon has-text-danger"><x-carbon-trash-can /></span>
                    </a>
                </p>

            </div>
        </nav>

        <div class="media">
            <div class="media-left has-text-centered">
                <figure class="image is-48x48">
                    <x-carbon-group-presentation />
                </figure>
            </div>
            <div class="media-content">
                <p class="title is-4"> P-{{ $pid }}</p>
                <p class="subtitle is-6">{{ $name}}</p>
            </div>
        </div>

        <div class="columns is-size-7 has-text-grey mt-6">

            <div class="column">
                <p>{{ $created_at }}</p>
            </div>

            <div class="column has-text-right">
                <p>{{ $updated_at }}</p>
            </div>

        </div>

    </div>

</div>

