<h6 class="navbar-heading text-muted">
@if(auth()->user()->role=='admin')
Gestionar Datos</h6>
@else
Menú
@endif
</h6>
 <ul class="navbar-nav">
 @if(auth()->user()->role=='admin')
           <li class="nav-item">
             <a class="nav-link" href="./home">
               <i class="ni ni-tv-2 text-red"></i> Dashboard
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/specialties">
               <i class="ni ni-planet text-blue"></i> Especialidades
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/doctors">
               <i class="ni ni-single-02 text-red"></i> Medicos
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/patients">
               <i class="ni ni-satisfied text-info"></i> Pacientes
             </a>
           </li>
         
@elseif(auth()->user()->role=='doctor')

          

<li class="nav-item">
             <a class="nav-link" href="/shedule">
               <i class="ni ni-planet text-blue"></i> Gestionar Horarios
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/doctors">
               <i class="ni ni-single-02 text-red"></i>Mis Pacientes 
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/patients">
               <i class="ni ni-satisfied text-info"></i>Mi citas
             </a>
           </li>



   @else{{---patient---}}
   
            <li class="nav-item">
             <a class="nav-link" href="/appointments/create">
               <i class="ni ni-time-alarm text-blue"></i> Reservar Citas </h6>
             </a>
           </li>
          
           <li class="nav-item">
             <a class="nav-link" href="/appointments">
               <i class="ni ni-single-02 text-info"></i> Mis citas
             </a>
           </li>
           
 @endif
          
          <li class="nav-item">
            <a class="nav-link" href="" onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
              <i class="ni ni-key-25 text-inf"></i> Cerrar Sesión
            
            </a>
          
            
              <form role="form" method="POST" action="{{ route('logout') }}" Style="display:none;" id="formLogout">
               @csrf
</form>
          </li>

 @if(auth()->user()->role=='admin')
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Reportes</h6>
           <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
              <i class="ni ni-chart-pie-35 text-yellow"></i> Frecuencia de citas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
              <i class="ni ni-palette text-orange"></i> Medicos mas activos
            </a>
          </li>
          
        </ul>
       @endif