<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Invoice;
use App\Models\Milestone;
use App\Models\Project;
use App\Models\ServiceType;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ServiceTypeController extends Controller
{
    public function AllServiceType()
    {
        $types = ServiceType::latest()->get();
        return view('admin.services.all_service_type',compact('types'));
    } // End Method

    public function AddServiceType()
    {
        return view('admin.services.add_service_type');
    } // End Method

    public function StoreServiceType(Request $request)
    {
        //validation
        $request->validate([
            'service_name' => 'required|unique:service_types|max:200', // required and unique in property_types table from DB, max 200 char
            'service_unit' => 'required',
        ]);

        ServiceType::insert([
            'service_name' => $request->service_name,
            'service_unit' => $request->service_unit,
        ]);

        $notification = array(
            'message' => 'Property Type Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.service-type')->with($notification);

    } // End Method

    public function EditServiceType($id)
    {
        $types = ServiceType::findOrFail($id);
        return view('admin.services.edit_service_type', compact('types'));
    } // End Method

    public function UpdateServiceType(Request $request)
    {
        $propertyId = $request->id;

        ServiceType::findOrFail($propertyId)->update([
            'service_name' => $request->service_name,
            'service_unit' => $request->service_unit,
        ]);

        $notification = array(
            'message' => 'Property Type Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.service-type')->with($notification);

    } // End Method

    public function DeleteServiceType($id)
    {
        ServiceType::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Service Type Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // End Method


    // CLIENTS CONTROLLER METHODS
    public function AllClients()
    {
        $clients = Client::latest()->get();
        return view('admin.clients.all_clients',compact('clients'));
    } // End Method

    public function AddClients()
    {
        return view('admin.clients.add_clients');
    } // End Method

    public function StoreClients(Request $request)
    {
        //validation
        $request->validate([
            'client_name' => 'required|unique:clients|max:200', // required and unique in clients table from DB, max 200 char
            'client_telephone' => 'required',
            'client_email' => 'required',
            'client_address' => 'required',
            'client_pj_name', // astea trebuie sa fie cu required ??!
            'client_pj_cui',
            'client_pj_j',
            'client_pj_bank',
            'client_pj_iban',
        ]);

        Client::insert([
            'client_name' => $request->client_name,
            'client_telephone' => $request->client_telephone,
            'client_email' => $request->client_email,
            'client_address' => $request->client_address,
            'client_pj_name' => $request->client_pj_name,
            'client_pj_cui' => $request->client_pj_cui,
            'client_pj_j' => $request->client_pj_j,
            'client_pj_bank' => $request->client_pj_bank,
            'client_pj_iban' => $request->client_pj_iban,
        ]);

        $notification = array(
            'message' => 'Client Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.clients')->with($notification);

    } // End Method

    public function EditClients($id)
    {
        $clients = Client::findOrFail($id);
        return view('admin.clients.edit_clients', compact('clients'));
    } // End Method

    public function UpdateClients(Request $request)
    {
        $clientId = $request->id;

        Client::findOrFail($clientId)->update([
            'client_name' => $request->client_name,
            'client_telephone' => $request->client_telephone,
            'client_email' => $request->client_email,
            'client_address' => $request->client_address,
            'client_pj_name' => $request->client_pj_name,
            'client_pj_cui' => $request->client_pj_cui,
            'client_pj_j' => $request->client_pj_j,
            'client_pj_bank' => $request->client_pj_bank,
            'client_pj_iban' => $request->client_pj_iban,
        ]);

        $notification = array(
            'message' => 'Client Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.clients')->with($notification);

    } // End Method

    public function DeleteClients($id)
    {
        Client::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Client Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // End Method

    // PROJECTS CONTROLLER METHODS

    public function AllProjects()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.all_projects',compact('projects'));
    } // End Method

    public function AddProjects()
    {
        return view('admin.projects.add_projects');
    } // End Method

    public function StoreProjects(Request $request)
    {
        //validation
        $request->validate([
            'project_name' => 'required|unique:projects|max:200', // required and unique in clients table from DB, max 200 char
            'project_address' => 'required',
            'project_description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'project_status' => 'required',
            'project_number',
            'project_budget',
            'project_client',
        ]);

        Project::insert([
            'project_name' => $request->project_name,
            'project_address' => $request->project_address,
            'project_description' => $request->project_description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'project_status' => $request->project_status,
            'project_number' => $request->project_number,
            'project_budget' => $request->project_budget,
            'project_client' => $request->project_client,
        ]);

        $notification = array(
            'message' => 'Project Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.projects')->with($notification);

    } // End Method

    public function EditProjects($id)
    {
        $projects = Project::findOrFail($id);
        return view('admin.projects.edit_projects', compact('projects'));
    } // End Method

    public function UpdateProjects(Request $request)
    {
        $projectId = $request->id;

        Project::findOrFail($projectId)->update([
            'project_name' => $request->project_name,
            'project_address' => $request->project_address,
            'project_description' => $request->project_description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'project_status' => $request->project_status,
            'project_number' => $request->project_number,
            'project_budget' => $request->project_budget,
            'project_client' => $request->project_client,
        ]);

        $notification = array(
            'message' => 'Project Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.projects')->with($notification);

    } // End Method

    public function DeleteProjects($id)
    {
        Project::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Project Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // End Method

    // INVOICES CONTROLLER METHODS

    public function AllInvoices()
    {
        $invoices = Invoice::latest()->get();
        return view('admin.invoice.all_invoices',compact('invoices'));
    } // End Method

    public function AddInvoices()
    {
        return view('admin.invoice.add_invoices');
    } // End Method

    public function StoreInvoices(Request $request)
    {
        //validation
        $request->validate([
            'invoice_number' => 'required|unique:invoices|max:20', // required and unique in clients table from DB, max 200 char
            'invoice_series' => 'required',
            'invoice_amount' => 'required',
            'invoice_issue_date' => 'required',
            'invoice_due_date' => 'required',
            'invoice_status' => 'required',
            'invoice_client' => 'required',
        ]);

        Invoice::insert([
            'invoice_number' => $request->invoice_number,
            'invoice_series' => $request->invoice_series,
            'invoice_amount' => $request->invoice_amount,
            'invoice_issue_date' => $request->invoice_issue_date,
            'invoice_due_date' => $request->invoice_due_date,
            'invoice_status' => $request->invoice_status,
            'invoice_client' => $request->invoice_client,
        ]);

        $notification = array(
            'message' => 'Invoice Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.invoices')->with($notification);

    } // End Method

    public function ViewInvoices($id)
    {
        $invoices = Invoice::findOrFail($id);
        $pdf = Pdf::loadView('admin.invoice.pdf_invoice', compact('invoices'));

        return $pdf->stream();
    } // End Method

    // MILESTONES CONTROLLER METHODS

    public function AllMilestones()
    {
        $milestones = Milestone::latest()->get();
        return view('admin.milestones.all_milestones',compact('milestones'));
    } // End Method

    public function AddMilestones()
    {
        return view('admin.milestones.add_milestones');
    } // End Method

    public function StoreMilestones(Request $request)
    {
        //validation
        $request->validate([
            'milestone_name' => 'required', // required and unique in clients table from DB, max 200 char
            'milestone_projectId' => 'required',
            'milestone_start' => 'required',
            'milestone_end' => 'required',
        ]);

        Milestone::insert([
            'milestone_name' => $request->milestone_name,
            'milestone_projectId' => $request->milestone_projectId,
            'milestone_start' => $request->milestone_start,
            'milestone_end' => $request->milestone_end,
        ]);

        $notification = array(
            'message' => 'Milestone Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.milestones')->with($notification);

    } // End Method

    public function EditMilestones($id)
    {
        $milestones = Client::findOrFail($id);
        return view('admin.milestones.edit_milestones', compact('milestones'));
    } // End Method

    public function UpdateMilestones(Request $request)
    {
        $milestoneId = $request->id;

        Milestone::findOrFail($milestoneId)->update([
            'milestone_name' => $request->milestone_name,
            'milestone_projectId' => $request->milestone_projectId,
            'milestone_start' => $request->milestone_start,
            'milestone_end' => $request->milestone_end,
        ]);

        $notification = array(
            'message' => 'Milestone Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.milestones')->with($notification);

    } // End Method

    public function DeleteMilestones($id)
    {
        Milestone::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Milestone Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // End Method

}
