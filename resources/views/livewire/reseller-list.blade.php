<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="card border-0 overflow-hidden">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table mb-0 table-hover align-middle app-table-md app-table">
                    <thead class="app-bg-primary text-white">
                        <tr>
                            <th scope="col">User</th>
                            <th scope="col">Email</th>
                            <th scope="col">Campaign(s)</th>
                            <th class="text-end" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($resellerUsers) > 0)
                            @foreach ($resellerUsers as $resellerUser)
                                <tr>
                                    <td class="">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="">
                                                <div class="avatar avatar-md rounded-circle overflow-hidden">
                                                    <img src="{{ asset('assets/img/avatar/user-4.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0 ms-2 text-secondary app-fw-400"> {{ ucwords($resellerUser->name) }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="">{{ $resellerUser->email }}</span>
                                    </td>
                                    <td>
                                        <span class="">3</span>
                                    </td>
                                    <td class="">
                                        <div class="d-flex justify-content-end">
                                            <button class="app-btn-icon app-btn-icon-accent me-2">
                                                <i class="bi-eye"></i>
                                            </button>
                                            <button wire:click.prevent="changeUserPassword({{ $resellerUser->id }})" class="app-btn-icon app-btn-icon-accent me-2">
                                                <i class="bi-pencil"></i>
                                            </button>
                                            <button wire:click.prevent="confirmUserDelete({{ $resellerUser->id }})" class="app-btn-icon app-btn-icon-accent">
                                                <i class="bi-trash"></i>
                                            </button>
                                        </div>
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
