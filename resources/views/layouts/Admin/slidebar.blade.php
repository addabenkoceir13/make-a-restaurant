<!-- Sidebar-->
<div class="border-end bg-w" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-w">
        <img src="{{asset('assets/Frontend/icon/logo33.png')}}" class="rounded-circle" width="50px" alt="">
            TECHSHOP
    </div>
    <div class="list-group list-group-flush bg-w">
        <a class="list-group-item list-group-item-action list-group-item-w  p-3 {{ Request::is('admin/dashboard') ? 'active':''; }}" href="{{ url('admin/dashboard')}}">
            <i class="mx-2 bi bi-speedometer2"></i> Dashboard</a>
        <a class="list-group-item list-group-item-action list-group-item-w  p-3 {{ Request::is('admin/specialite') ? 'active':''; }}" href="{{ url('admin/specialite')}}">
            <i class="mx-2 bi bi-phone"></i>Specialite </a>
        <a class="list-group-item list-group-item-action list-group-item-w  p-3 {{ Request::is('admin/specialite/ajouter') ? 'active':'';}}" href="{{ route('specialite.ajouter') }}">
            <i class="mx-2 bi bi-phone"></i> Ajouter Specialite </a>
        <a class="list-group-item list-group-item-action list-group-item-w  p-3 {{ Request::is('') ? 'active':'';}}" href="{{ url('')}}">
            <i class="mx-2 bi bi-boxes"></i> </a>
        <a class="list-group-item list-group-item-action list-group-item-w  p-3 {{ Request::is('') ? 'active':'';}}" href="{{ url('')}}">
            <i class="mx-2 bi bi-box-arrow-in-down"></i> </a>
        <a class="list-group-item list-group-item-action list-group-item-w  p-3 {{ Request::is('') ? 'active':'';}}" href="{{ url('')}}">
            <i class="mx-2 bi bi-clipboard-check"></i>  </a>
        <a class="list-group-item list-group-item-action list-group-item-w  p-3 {{ Request::is('') ? 'active':'';}}" href="{{ url('')}}">
            <i class="mx-2 bi bi-people"></i>  </a>
        <a class="list-group-item list-group-item-action list-group-item-w  p-3 {{ Request::is('') ? 'active':''; }}" href="{{ url('')}}">
            <i class="mx-2 bi bi-person-add"></i></a>
</div>
</div>
<!-- Page content wrapper-->
