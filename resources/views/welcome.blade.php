@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>IOB - Portal</h1>
            <p>Established in 1988 as the professional and educational body for the banking and the financial services
                industry in Namibia, the Institute is the leader in providing industry-focused training programs and
                certifications. The Institute is the only national association devoted exclusively to representing and
                advancing the interests of the banking community throughout Namibia.</p><p>Namibian registered banks inject
                billions of Namibia dollars each year into the economies of major cities across the country through the
                direct employment of over 3000 employees, as well as through other operating and capital
                expenditures.</p><p>IOB has emerged as a premier institute in banking education for those employed as well as
                seeking employment in the sector, aiming for professional excellence. Since inception, the Institute
                through its qualifications has educated numerous members and awarded several banking qualifications,
                viz., Certificates and Diplomas in specialized areas and helped them to sustain their professionalism
                through professional qualifications.</p>
            <p><a href="{{ url('dashboard') }}" class="btn btn-info btn-lg">Go to Dashboard</a></p>
        </div>

    </div>
@endsection
