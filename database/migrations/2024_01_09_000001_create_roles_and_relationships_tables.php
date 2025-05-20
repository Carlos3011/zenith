<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Tabla de roles
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Tabla pivote para la relación muchos a muchos entre usuarios y roles
        Schema::create('role_user', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('role_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            $table->primary(['user_id', 'role_id']);
        });

        // Tabla de perfiles de psicólogos
        Schema::create('psychologist_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('license_number')->unique();
            $table->string('specialization');
            $table->text('professional_statement');
            $table->boolean('is_available')->default(true);
            $table->timestamps();
        });

        // Tabla de perfiles de pacientes
        Schema::create('patient_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->date('date_of_birth');
            $table->string('emergency_contact');
            $table->string('emergency_phone');
            $table->text('medical_history')->nullable();
            $table->timestamps();
        });

        // Tabla de evaluaciones de IA
        Schema::create('ai_evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->references('id')->on('patient_profiles')->onDelete('cascade');
            $table->text('evaluation_data');
            $table->string('emotional_state');
            $table->integer('stress_level');
            $table->text('recommendations')->nullable();
            $table->timestamps();
        });

        // Tabla de diagnósticos
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('psychologist_id')->references('id')->on('psychologist_profiles')->onDelete('cascade');
            $table->foreignId('evaluation_id')->references('id')->on('ai_evaluations')->onDelete('cascade');
            $table->text('description');
            $table->text('treatment_plan');
            $table->timestamp('diagnosis_date');
            $table->timestamps();
        });

        // Tabla de técnicas de mindfulness
        Schema::create('mindfulness_techniques', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->integer('duration_minutes');
            $table->string('difficulty_level');
            $table->text('instructions');
            $table->timestamps();
        });

        // Tabla de sesiones de seguimiento
        Schema::create('follow_up_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->references('id')->on('patient_profiles')->onDelete('cascade');
            $table->foreignId('psychologist_id')->references('id')->on('psychologist_profiles')->onDelete('cascade');
            $table->timestamp('session_date');
            $table->text('notes');
            $table->integer('progress');
            $table->timestamp('next_session');
            $table->timestamps();
        });

        // Tabla de notificaciones
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('message');
            $table->boolean('read')->default(false);
            $table->timestamps();
        });

        // Tabla de recursos multimedia
        Schema::create('multimedia_resources', function (Blueprint $table) {
            $table->id();
            $table->foreignId('technique_id')->references('id')->on('mindfulness_techniques')->onDelete('cascade');
            $table->string('type'); // video, audio, imagen
            $table->string('url');
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Tabla de actividades de mindfulness completadas
        Schema::create('completed_mindfulness_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->references('id')->on('patient_profiles')->onDelete('cascade');
            $table->foreignId('technique_id')->references('id')->on('mindfulness_techniques')->onDelete('cascade');
            $table->timestamp('completion_date');
            $table->integer('duration_minutes');
            $table->text('feedback')->nullable();
            $table->integer('effectiveness_rating')->nullable();
            $table->timestamps();
        });

        // Tabla de citas
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->references('id')->on('patient_profiles')->onDelete('cascade');
            $table->foreignId('psychologist_id')->references('id')->on('psychologist_profiles')->onDelete('cascade');
            $table->timestamp('appointment_date');
            $table->string('status'); // programada, completada, cancelada
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
        Schema::dropIfExists('completed_mindfulness_activities');
        Schema::dropIfExists('multimedia_resources');
        Schema::dropIfExists('notifications');
        Schema::dropIfExists('follow_up_sessions');
        Schema::dropIfExists('diagnoses');
        Schema::dropIfExists('mindfulness_techniques');
        Schema::dropIfExists('ai_evaluations');
        Schema::dropIfExists('patient_profiles');
        Schema::dropIfExists('psychologist_profiles');
        Schema::dropIfExists('role_user');
        Schema::dropIfExists('roles');
    }
};