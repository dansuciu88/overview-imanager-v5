<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Over<span>View</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">CRM</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="list"></i>
                    <span class="link-title">Service Type</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="emails">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('all.service-type') }}" class="nav-link">All Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add.service-type') }}" class="nav-link">Add Services</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#clients" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Clients</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="clients">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('all.clients') }}" class="nav-link">All Clients</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add.clients') }}" class="nav-link">Add Client</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#projects" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="folder"></i>
                    <span class="link-title">Projects</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="projects">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('all.projects') }}" class="nav-link">All Projects</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add.projects') }}" class="nav-link">Add Projects</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="pages/apps/chat.html" class="nav-link">
                    <i class="link-icon" data-feather="pie-chart"></i>
                    <span class="link-title">Gantt</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/apps/calendar.html" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Calendar</span>
                </a>
            </li>
            <li class="nav-item nav-category">Invoice</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#milestones" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="map"></i>
                    <span class="link-title">Milestones</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="milestones">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('all.milestones') }}" class="nav-link">All Milestones</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add.milestones') }}" class="nav-link">Add Milestone</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#invoice" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="dollar-sign"></i>
                    <span class="link-title">Invoice</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="invoice">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('all.invoices') }}" class="nav-link">All Invoices</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add.invoices') }}" class="nav-link">Add Invoice</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">Documents</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#contracts" role="button" aria-expanded="false" aria-controls="uiComponents">
                    <i class="link-icon" data-feather="file"></i>
                    <span class="link-title">Contracts</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="contracts">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('all.contracts') }}" class="nav-link">All Contracts</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add.contracts') }}" class="nav-link">Add Contracts</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#documents" role="button" aria-expanded="false" aria-controls="advancedUI">
                    <i class="link-icon" data-feather="clipboard"></i>
                    <span class="link-title">Documents</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="documents">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('all.documents') }}" class="nav-link">All Reports</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add.contracts') }}" class="nav-link">Add Report</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">Docs</li>
            <li class="nav-item">
                <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
                    <i class="link-icon" data-feather="hash"></i>
                    <span class="link-title">Documentation</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<nav class="settings-sidebar">
    <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
            <i data-feather="settings"></i>
        </a>
        <div class="theme-wrapper">
            <h6 class="text-muted mb-2">Light Theme:</h6>
            <a class="theme-item" href="../demo1/dashboard.html">
                <img src="../assets/images/screenshots/light.jpg" alt="light theme">
            </a>
            <h6 class="text-muted mb-2">Dark Theme:</h6>
            <a class="theme-item active" href="../demo2/dashboard.html">
                <img src="../assets/images/screenshots/dark.jpg" alt="light theme">
            </a>
        </div>
    </div>
</nav>
