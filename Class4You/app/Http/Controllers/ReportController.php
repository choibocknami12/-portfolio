<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;
use App\Models\Comment;
use App\Models\User;
use App\Models\Report;
use App\Models\Instructor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class ReportController extends Controller
{
    // 게시판 신고 함수
    public function postReportData(Request $request) {

        Log::debug("리퀘스트값==============================================");
        Log::debug($request);

        $data = new Report;
        $data->UserID = Auth::id();

        $data->fill($request->all());
        $data->save();

        Log::debug("데이터-----------------------------");
        Log::debug($data);

        return response()->json(['success' => true]);
    }

    // 댓글 신고 함수
    public function postCommentReportData(Request $request) {

        // Log::all("postCommentReportData method called");
        Log::debug("리퀘스트값==============================================");
        Log::debug($request);
        
        $data = $request->only('ReportID','BoardID','CommentID','UserID','ReportContent','ReportState');
        $data['UserID'] = Auth::id(); 

        $result = Report::create($data);

        Log::debug($result);

        $responseData = Report::all();

        return response()->json($responseData);

    }

    // 관리자 신고 게시글 리스트 출력 함수
    public function getAdminBoardReportData() {

        // Log::debug("리퀘스트값");
        // Log::debug($request);
        
        $boardReportData = Report::orderBy('created_at', 'desc')
                                ->paginate(10);
        // $boardReportData = Report::paginate(10);

        // $pageBoardReportData = $boardReportData->paginate(10);

        // $queryBuilder = Report::query();
        // $queryBuilder->orderBy('created_at', 'desc');

        // paginate 메서드를 사용하여 페이지네이션 적용
        // $boardReportData = $queryBuilder->paginate(10);

        Log::debug("데이터값==============================================================");
        Log::debug($boardReportData);

        return response()->json([
            'boardReportData' => $boardReportData,
            // 'pageBoardReportData' => $pageBoardReportData,
        ]);
    }

    // 관리자 신고 게시글 삭제함수
    public function delAdminBoardReportData($ReportID) {

        // Log::debug("ReportID");
        // Log::debug($ReportID);

        $delReportData = Report::find($ReportID);

        $delBoardData = Board::select('boards.BoardID',
                                    'boards.UserID',
                                    'boards.BoardComment')
                                ->join('reports','reports.UserID','boards.UserID')
                                ->where('boards.BoardID', $delReportData->BoardID)
                                ->get();
        
        $delCommentData = Comment::select('comments.CommentID',
                                        'comments.UserID',
                                        'comments.CommentContent')
                                    ->join('reports','reports.UserID','comments.UserID')
                                    ->where('comments.CommentID', $delReportData->CommentID)
                                    ->get();                        

        // Log::debug("Boarddata");
        // Log::debug($delBoardData);

        if ($delReportData->BoardID) {
            $data = Board::destroy($delReportData->BoardID);
        } else {
            $data = Comment::destroy($delReportData->CommentID);
        }

        $delReportData->update(['ReportState' => '1']);
        // Log::debug($delReportData);

        return response()->json($data);

    }
}
