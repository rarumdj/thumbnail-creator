<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="card border-0 overflow-hidden">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table mb-0 table-hover align-middle app-table-md app-table">
                    <thead class="app-bg-primary text-white">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">User(s)</th>
                            <th scope="col">Campaign(s)</th>
                            <th class="text-end" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($workspaces) > 0)
                            @foreach ($workspaces as $key => $workspace)
                                <tr data-workspace="{{ $workspace->id }}">
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td class="workspace_name">{{ ucwords($workspace->name) }}</td>
                                    <td>5</td>
                                    <td>3</td>
                                    <td class="d-flex justify-content-end">
                                        <a href="/dashboard/workspace/{{ $workspace->id }}" class="app-btn-icon app-btn-icon-accent me-2">
                                            <i class="bi-eye"></i>
                                        </a>
                                        <button data-bs-toggle="modal" data-bs-target="#editWorkspaceModal" class="edit-workspace app-btn-icon app-btn-icon-accent me-2">
                                            <i class="bi-pencil"></i>
                                        </button>
                                        <button class="app-btn-icon app-btn-icon-accent" wire:click.prevent="confirmDeleteWorkspace('{{ $workspace->id }}')">
                                            <i class="bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
