<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use Closure;
use Session;

class CheckAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $guard_name = 'web';
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {

        if (!$this->auth->guest()) {
            
            if( $this->auth ){
                /*if( intval( $this->auth->user()->email_verified ) != 1 ){
                    $this->auth->logout();
                    return redirect('/')->withErrors(['email' => trans('translations.frontend.login_verify_email_error') ]);
                }
                
                if( !$this->auth->user()->isActive()){
                    $this->auth->logout();
                    return redirect('/')->withErrors(['email' =>  trans('translations.frontend.rules.account_inactive_error')]);
                }
            
                $language_preferenced = $this->auth->user()->userxprofile->language_preferenced;
                app()->setLocale( $language_preferenced );
                
                if( intval( $this->auth->user()->mobile_verified ) != 1 ){
                    return redirect('agentverifyotp');
                }
                
                return $next($request);
            }
            else{
                $this->auth->logout();
                return redirect('/')->withErrors(['email' =>  trans('translations.frontend.rules.access_error')]);
            }*/
        }
        else{
            return redirect('/');
        }
        /*if ( !$this->auth->guest() ) {
            return redirect('/dashboard');
        }
        else{
            return $next($request);
        }


        f(!Auth::check()){
            return redirect('/');
        }
        
        if(!Auth::user()->access){
            return redirect('dashboard');
        }
        return $next($request);*/
    }else{
            return redirect('/');
        }
    }
}
