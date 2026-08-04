import React, { useMemo, useRef } from 'react';
import { Canvas, useFrame } from '@react-three/fiber';
import * as THREE from 'three';

function FloatingAccent() {
    const ringRef = useRef();
    const orbRef = useRef();

    useFrame((state) => {
        const elapsedTime = state.clock.getElapsedTime();

        if (ringRef.current) {
            ringRef.current.rotation.x = elapsedTime * 0.2;
            ringRef.current.rotation.y = elapsedTime * 0.28;
        }

        if (orbRef.current) {
            orbRef.current.position.y = Math.sin(elapsedTime * 1.2) * 0.12;
            orbRef.current.rotation.z = THREE.MathUtils.lerp(
                orbRef.current.rotation.z,
                Math.sin(elapsedTime * 0.7) * 0.18,
                0.04,
            );
        }
    });

    return (
        <group>
            <mesh ref={ringRef} position={[-0.9, 0.2, 0]} rotation={[0.4, 0.2, 0]}>
                <torusGeometry args={[1.2, 0.03, 12, 64]} />
                <meshStandardMaterial color="#00ffd1" emissive="#00ffd1" emissiveIntensity={0.8} transparent opacity={0.5} />
            </mesh>
            <mesh ref={orbRef} position={[1.3, -0.15, 0.4]}>
                <icosahedronGeometry args={[0.45, 1]} />
                <meshStandardMaterial color="#ffb59e" emissive="#ffb59e" emissiveIntensity={0.5} transparent opacity={0.45} />
            </mesh>
        </group>
    );
}

function FloatingLights() {
    const positions = useMemo(() => ([
        [-2.5, 1.5, 2.2],
        [2.4, 1.1, 2.6],
        [0, 2.4, 1.8],
    ]), []);

    return positions.map((position, index) => (
        <mesh key={index} position={position}>
            <sphereGeometry args={[0.08, 16, 16]} />
            <meshBasicMaterial color={index === 1 ? '#ffb59e' : '#00ffd1'} />
        </mesh>
    ));
}

export default function VendorBoothScene() {
    return (
        <div className="absolute inset-0 pointer-events-none -z-10 opacity-35">
            <Canvas camera={{ position: [0, 0.7, 5.5], fov: 38 }}>
                <ambientLight intensity={0.4} />
                <directionalLight position={[3, 4, 5]} intensity={1.3} color="#ffffff" />
                <pointLight position={[-3, 2, 3]} intensity={1.4} color="#00ffd1" />
                <pointLight position={[3, 1, 2]} intensity={0.9} color="#ffb59e" />
                <FloatingAccent />
                <FloatingLights />
            </Canvas>
        </div>
    );
}