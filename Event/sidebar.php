<?php
// sidebar.php - exact sidebar from original HTML with PHP active class
 $current = basename($_SERVER['SCRIPT_NAME']);
?>
<section class="d-lg-block"> 
  <div class="sidebar d-lg-block" id="mainSidebar">
        <nav class="text-center">
          <img src="../images/stctandag-logo.png" alt="stc_logo" class="mx-auto d-block stc-logo" srcset="">
          <div class="d-flex flex-column align-items-center <?php echo $current === 'index.php' ? 'active-sidebar' : '' ?>">
            <a href="index.php" data-key="home" class="link-body-emphasis text-decoration-none">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house text-light" viewBox="0 0 16 16">
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
              </svg>
              <ul class="nav">
                <li><a href="index.php" data-key="home" class="nav-link px-2 link-body-emphasis"><p class="side_home text-light">Dashboard</p></a></li>
              </ul>
            </a>
          </div>
          <div class="d-flex flex-column align-items-center <?php echo $current === 'ongoing.php' ? 'active-sidebar' : '' ?>">
            <a href="ongoing.php" data-key="ongoing" class="mb-2  link-body-emphasis text-decoration-none  ">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-calendar-check text-light " viewBox="0 0 16 16" style="margin-top: 1rem !important;">
                <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
              </svg>
              <ul class="nav">
                <li><a href="ongoing.php" data-key="ongoing" class="nav-link px-2 link-body-emphasis"><p class="ongoing text-light">Ongoing Events</p></a></li>
              </ul>
            </a>
          </div>
          <div class="d-flex flex-column align-items-center <?php echo $current === 'add_event.php' ? 'active-sidebar' : '' ?>">
            <a href="add_event.php" data-key="add" class="mb-2 link-body-emphasis text-decoration-none ">
             <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-plus-square" viewBox="0 0 16 16" style="margin-top: 1rem !important;">
              <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
            </svg>
              <ul class="nav">
                <li><a href="add_event.php" data-key="add" class="nav-link px-2 link-body-emphasis"><p class="Add text-light">ADD EVENTS</p></a></li>
              </ul>
            </a>
          </div>

          <div class="d-flex flex-column align-items-center <?php echo $current === 'Add_student.php' ? 'active-sidebar' : '' ?>">
            <a href="Add_student.php" data-key="students" class="mb-2 link-body-emphasis text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-person-plus" viewBox="0 0 16 16" style="margin-top: 1rem !important;">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
                </svg>
              <ul class="nav">
                <li><a href="Add_student.php" data-key="students" class="nav-link px-2 link-body-emphasis"><p class="students text-light">Students</p></a></li>
              </ul>
            </a>
          </div>
          
          <div class="d-flex flex-column align-items-center <?php echo $current === 'scanlog.php' ? 'active-sidebar' : '' ?>">
            <a href="scanlog.php" data-key="scanlog" class="mb-2 link-body-emphasis text-decoration-none">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-card-checklist" viewBox="0 0 16 16" style="margin-top: 1rem !important;">
                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
                </svg>
              <ul class="nav">
                <li><a href="scanlog.php" data-key="scanlog" class="nav-link px-2 link-body-emphasis"><p class="scan text-light">ScanLOG</p></a></li>
              </ul>
            </a>
          </div>


            <div class="d-flex flex-column align-items-center pt-2 archive-section <?php echo $current === 'archived.php' ? 'active-sidebar' : '' ?>">
              <a href="archived.php" data-key="archived" class="mb-2 link-body-emphasis text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-trash3-fill" viewBox="0 0 16 16"  >
              <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
            </svg>
              <ul class="nav">
                <li><a href="archived.php" data-key="archived" class="nav-link px-2 link-body-emphasis"><p class="archived text-light">Archived</p></a></li>
              </ul>
            </a>
          </div>
        </nav>
      </div>
</section>

<style>
/* hover darken effect for sidebar items */
#mainSidebar nav .d-flex:hover { 
  background-color: rgba(0,0,0,0.15) !important; 
  border-radius: 6px; 
  border-left: 3px solid white;
  transition: background-color 0.2s ease, border-left 0.2s ease;
}

/* clicked darken state for immediate feedback before navigation */
.clicked-sidebar{ 
  background-color: rgba(0,0,0,0.18) !important; 
  border-radius: 6px; 
}
</style>

<script>
// Persistent active sidebar using localStorage. Local selection overrides server PHP active if present.
document.addEventListener('DOMContentLoaded', function(){
  const navAnchors = document.querySelectorAll('#mainSidebar nav a[data-key]');
  const containerItems = Array.from(document.querySelectorAll('#mainSidebar nav .d-flex'));

  function clearActive(){ containerItems.forEach(it=> it.classList.remove('active-sidebar')); }

  // Apply stored active if exists (overrides PHP active)
  const stored = localStorage.getItem('activeSidebar');
  if(stored){
    const match = document.querySelector('#mainSidebar nav a[data-key="'+stored+'"]');
    if(match){
      clearActive();
      const parent = match.closest('.d-flex');
      if(parent) parent.classList.add('active-sidebar');
    }
  }

  // Wire clicks: store selection and give immediate feedback
  navAnchors.forEach(a=>{
    a.addEventListener('click', function(e){
      const key = a.getAttribute('data-key');
      try{ localStorage.setItem('activeSidebar', key); }catch(e){}
      // feedback
      const parent = a.closest('.d-flex');
      if(!parent) return;
      // remove clicked from siblings
      containerItems.forEach(s=> s.classList.remove('clicked-sidebar'));
      parent.classList.add('clicked-sidebar');
      // also apply active immediately so user sees persistent state
      clearActive(); parent.classList.add('active-sidebar');
      // navigation will proceed normally
    });
  });
});
</script>
